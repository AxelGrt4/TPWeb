

<?php 
$db = new PDO(
    "mysql:host = localhost;
     port=3306;dbname=m3104;charset=utf8",
     "root",
     "",
);

?>

<?php
include('../../includes/pdo.php');


$stmt = $db->prepare("insert into album values(:id,:nom,:genre,:artiste,:date)");

$f = file('..\..\fichiers\Album.txt');

foreach ($f as $ligne) {
    list($id, $n, $g, $a, $date) = explode(';', $ligne);
    $stmt->execute(array(':id' => $id, ':nom' => $n, ':genre' => $g, ':artiste' => $a, ':date' => $date));
}


$stmt = $db->prepare("insert into artiste values(:id,:nom)");

$f = file('..\..\fichiers\Artistes.txt');

foreach ($f as $ligne) {
    list($id, $n) = explode(';', $ligne);
    $stmt->execute(array(':id' => $id, ':nom' => $n));
}


$stmt = $db->prepare("insert into genre values(:id,:nom)");

$f = file('..\..\fichiers\Genre.txt');

foreach ($f as $ligne) {
    list($id, $n) = explode(';', $ligne);
    $stmt->execute(array(':id' => $id, ':nom' => $n));
}



$stmt = $db->query("SELECT * FROM album, artiste, genre WHERE album.artiste = artiste.id AND album.genre = genre.id");

foreach ($stmt as $ligne) {
    $data = $ligne [1] . " - " . $ligne[6] . " - " . $ligne[8] . "<br />" . "<br />";
    print $data;
}


?>
