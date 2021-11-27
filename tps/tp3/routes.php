<?php

Flight::route('/', function(){
    echo 'hello world!';
});
Flight::route('/liste.html', function(){
    $st = Flight::get('db') -> query("SELECT album.Index, album.Nom, artiste.nom, genre.nom, album.date, artiste.ID from album inner join artiste on artiste.ID = album.Artiste inner join genre on genre.id=album.genre");
    Flight::render('liste.tpl', array("titre" => 'Ma liste', "route" => 'liste.html', 'donnees' => $st));
});

Flight::route('/recherche-@name.html', function($name){
    $rech = Flight::get('db') -> prepare("SELECT album.Index, album.Nom, artiste.nom, genre.nom, album.date, artiste.ID from album inner join artiste on artiste.ID = album.Artiste inner join genre on genre.id=album.genre WHERE artiste.nom like :name or album.Nom like :name");
    $rech -> execute(array(':name' => "%$name%"));
    Flight::render('recherche.tpl', array('titre' => "Sujet de recherche", 'donnees' => $rech));
});

Flight::route('/artiste-@id-@name.html', function($id, $name){
    Flight::render('artiste.tpl', array('titre' => "Tableau des artistes", 'route' => "artiste-"."$id"."-"."$name".".html", 'id' => "id = "."$id", 'nom' => "nom = "."$name"));
});

Flight::route('*', function(){
    echo 'fallback';
});



?>