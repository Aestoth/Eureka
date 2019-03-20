<?php


require_once 'connexion.php';
$appliBD = new Connexion();

$motCles = $_POST['motCles'];


$appliBD->insertMotCles($motCles);

header("Location: page-profil-administrateur.php");


 ?>
