<html>
<body>

<h1>Exercice 1</h1>
<?php
    $n = rand(1,100);
    if($n%2 == 0){
    ?>
    <p> La valeur est paire</p>
<?php    
    } else {
?>
    <p>La valeur est impaire</p>
<?php
    }
    echo "n = $n";
?>

<h1>Exercie 2</h1>

<?php
    $nbOpt = rand(5,10);
?>
<select name="" id="">
<?php
    for($i = 1; $i <= $nbOpt; $i++){
            echo "<option".($i==2?' selected':'').">$i</option>";
    }
?>
</select>
<h1>Exercice 3</h1>
<?php
    $nbEnt = rand(0,15);
?>
<table>
<?php
    if($nbEnt != 0){
        for($i=1; $i<=$nbEnt;$i++){
            echo "<tr><td>$i</td><td>".($i%2 == 0?'PAIR':'IMPAIR')."</td></tr>";

        }
    } else {
        echo "<p>aucune donnée à afficher</p>";
    }
?>
</table>
    
<h1>Exercice 4</h1>

<table>
<?php
    $tab = array("titre" => 'PHP "avancé"', "vignette" => 'Z:\news\image\oreilly.png', "edition" => 'O\'Reilly', "prix" => '$US 15');
    foreach($tab as $cle=>$val){
        echo "<tr><td>$cle</td><td>$val</td></tr>";
    }
?>
</table>

<h1>Exercice 5</h1>

<?php
    $mail = 'axel.goret@etud.u-picardie.fr';
    $pos = strpos($mail, '@');

    if($pos){
        echo "Longueur de l'adresse mail $mail : " . strlen($mail);
        echo "<br>" . substr($mail, 0,$pos) . "      " . substr($mail, $pos + 1, strlen($mail) - $pos);
    } else {
        echo "Adresse mail invalide";
    }
?>

<h1>Exercice 6</h1>

<?php
    $fichier = '../../fichiers/listeURL.txt';
    $URL = file($fichier);
    foreach($URL as $ligne){
        echo "<p><a href='$ligne'>$ligne </a></p>";
    }
?>

<h1>Exercice 7</h1>

<?php
    $fichier = '../../fichiers/listeURL.txt';
    $seprateur = '|';
    $URL = file($fichier);


    foreach($URL as $i=>$ligne){
        $line = explode($seprateur, $ligne);
        $lien = $line[0];
        $description = $line[1];
        echo "<p class='".($i%2==0?'pair':'impaire')."><a href='$lien'> $description </a></p>";
    }
?>
<style>
    .pair{background : yellow}
    .impair{background : cyan}
</style>




<h1>Exercice 8</h1>
<table>
<?php
    foreach($_SERVER as $cle => $valeur){
        echo "<tr><td>$cle </td><td> $valeur</td></tr><br>";
    }
?>
</table>

<h1>Exercice 9</h1>

<?php
    
?>
</body>
</html>