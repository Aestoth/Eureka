<?php

require_once 'connexion.php';
$appliBD = new Connexion();

session_start();
$email = $_SESSION['email'];
$idEntrepriseByEmail = $appliBD->getEntrepriseByEmail($email);
$idEntreprise = $idEntrepriseByEmail->getId();


$titre = $_POST['titre'];
$photo = $_FILES["photo"]["name"];
$description = $_POST['description'];
$date1 = $_POST['date1'];
$periode1 = $_POST['periode1'];
$date2 = $_POST['date2'];
$periode2 = $_POST['periode2'];
$date3 = $_POST['date3'];
$periode3 = $_POST['periode3'];
$typeEvenement = $_POST['typeEvenement'];
$etatProjet = "En cours";

$suffixe = date("YmdHis");
$uploadedFileName = $_FILES["photo"]["name"];
$uploadedFile = new SplFileInfo($uploadedFileName);
$fileExtension = $uploadedFile->getExtension();
$destinationFolder = $_SERVER['DOCUMENT_ROOT']."/Eureka/";
$destinationName = "images/photo_projets/img-".$suffixe.".".$fileExtension;
$imageMoved = move_uploaded_file($_FILES["photo"]["tmp_name"], $destinationFolder.$destinationName);


$idProjet = $appliBD->insertProjet($titre, $destinationName, $description, $date1, $periode1, $date2, $periode2, $date3, $periode3, $typeEvenement, $etatProjet, $idEntreprise);


foreach ($_POST['motClesProjet'] as $value) {
    $appliBD->insertMotCles_projet($idProjet, $value);
}


$appliBD->insertRelationEntrepriseProjet($idEntreprise, $idProjet);



header("Location: page-projet.php?id=$idProjet");





?>
