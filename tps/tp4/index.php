<?php
require '../../includes/flight-master/flight/Flight.php';
// Load Smarty library
require '../../includes/smarty-3.1.35/libs/Smarty.class.php';
require '../../includes/pdo.php';

session_start();                                  //Debut de la session php

$pdo = new PDO(                                   //permet la connexion à la base de données
    "mysql:host = localhost;
     port=3306;dbname=m3104;charset=utf8",
     "root",
     "",
);

Flight::set('db', $pdo);                       //Définit db comme variable globale de Flight, permettant l'accès à la bdd


// Register Smarty as the view class
// Also pass a callback function to configure Smarty on load
Flight::register('view', 'Smarty', array(), function($smarty){       //Initialisation de smarty
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';    
});

Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
    
});

require "routes.php";                              //Importe le ichier routes.php
if(isset($_SESSION['Nom'])){
    Flight::view()->assign('Nom', $_SESSION['Nom']);    //Assigne à la variable globale 'Nom' la valeur de du champ 'Nom' du tableau de session, quand celui-ci est initialisé
    
}

Flight::start();               //Démarre le traitement Flight
