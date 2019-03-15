<?php

require_once 'connexion.php';
$appliBD = new Connexion();


$titre = $_POST['titre'];
$photo = $_POST['photo'];
$description = $_POST['description'];
$date1 = $_POST['date1'];
$periode1 = $_POST['periode1'];
$date2 = $_POST['date2'];
$periode2 = $_POST['periode2'];
$date3 = $_POST['date3'];
$periode3 = $_POST['periode3'];
$typeEvenement = $_POST['typeEvenement'];
$etatProjet = $_POST['etatProjet'];
$idEntreprise = $_POST['idEntreprise'];
$MotClesprojet = $_POST['MotClesprojet'];

$appliBD->insertProjet($titre, $photo, $description, $date1, $periode1, $date2, $periode2, $date3, $periode3, $typeEvenement, $etatProjet, $idEntreprise);




print_r($_POST);