<?php

require_once 'connexion.php';
$appliBD = new Connexion();


$nom = $_POST['nom'];
$password = $_POST['password'];
$urlSite = $_POST['urlSite'];
$description = $_POST['description'];
$facebook = $_POST['facebook'];
$linkdin = $_POST['linkdin'];
$instagram =  $_POST['instagram'];
$secteurAtivite =  $_POST['secteurAtivite'];
$logo =  $_POST['logo'];
$nombCollaborateurs =  $_POST['nombCollaborateurs'];
$contactNom1 =  $_POST['contactNom1'];
$contactPrenom1 =  $_POST['contactPrenom1'];
$contactEmail1 =  $_POST['contactEmail1'];
$contactNom2 =  $_POST['contactNom2'];
$contactPrenom2 =  $_POST['contactPrenom2'];
$contactEmail2 =  $_POST['contactEmail2'];
$contactNom3 =  $_POST['contactNom3'];
$contactPrenom3 =  $_POST['contactPrenom3'];
$contactEmail3 =  $_POST['contactEmail3'];
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$idEntreprise = $appliBD->insertEntreprise($nom, $passwordHash, $urlSite, $description, $facebook, $linkdin, $instagram, $secteurAtivite, $logo,
$nombCollaborateurs, $contactNom1, $contactPrenom1, $contactEmail1, $contactNom2, $contactPrenom2, $contactEmail2, $contactNom3, $contactPrenom3, $contactEmail3);

foreach ($_POST["motClesEntreprise"] as $value) {
    $appliBD->insertMotCles_entreprise($idEntreprise, $value);
}

    header("Location: page-profil-entreprise.php?id=$idEntreprise");








 ?>
