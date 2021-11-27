<?php
require '../../includes/flight-master/flight/Flight.php';
// Load Smarty library
require '../../includes/smarty-3.1.35/libs/Smarty.class.php';
require '../../includes/pdo.php';

session_start();

$pdo = new PDO(
    "mysql:host = localhost;
     port=3306;dbname=m3104;charset=utf8",
     "root",
     "",
);

Flight::set('db', $pdo);

// Register Smarty as the view class
// Also pass a callback function to configure Smarty on load
Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';    
});

Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
    
});

require "routes.php";
if(isset($_SESSION['Nom'])){
    Flight::view()->assign('Nom', $_SESSION['Nom']);
    
}

Flight::start();