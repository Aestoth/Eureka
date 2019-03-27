<?php


require_once 'connexion.php';
require_once 'bit_count.php';
$appliBD = new Connexion();

session_start();
$email = $_SESSION['email'];
$etudiantByEmail = $appliBD->getEtudiantByEmail($email);
$utilisateurByEmail = $appliBD->getUtilisateurByEmail($email);
$idEtudiant = $etudiantByEmail->getId();
$idUtilisateur = $utilisateurByEmail->getId();


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$description = $_POST['description'];
$telephone = $_POST['telephone'];
$jourDisponibles = to_bitfield($_POST['jourDisponibles']);
$newEmail = $_POST['email'];
$newPassword = $_POST['password'];
$passwordHash = password_hash($newPassword, PASSWORD_BCRYPT);

//$newInfo = $appliBD->setEtudiant($idEtudiant, $nom, $prenom, $description, $telephone, $jourDisponibles);

$motCles = $_POST['motClesEtudiant'];
if($motCles != null && !empty($motCles)){
    $appliBD->replaceMotClesEtudiant($idEtudiant, $motCles);
}

if($nom != null && !empty($nom)){
  $appliBD->setEtudiantNom($idEtudiant, $nom);
}

if($prenom != null && !empty($prenom)){
  $appliBD->setEtudiantPrenom($idEtudiant, $prenom);
}

if($description != null && !empty($description)){
  $appliBD->setEtudiantDescription($idEtudiant, $description);
}

if($telephone != null && !empty($telephone)){
  $appliBD->setEtudiantTelephone($idEtudiant, $telephone);
}

if($jourDisponibles != null && !empty($jourDisponibles)){
  $appliBD->setEtudiantJourDisponibles($idEtudiant, $jourDisponibles);
}


if($newEmail != null && !empty($newEmail)){
  $appliBD->setEtudiantEmail($idEtudiant, $newEmail);
  $appliBD->setUtilisateurEmail($idUtilisateur, $newEmail);
  $_SESSION['email'] = $newEmail;
}

if($newPassword != null && !empty($newPassword)){
  $appliBD->setEtudiantPassword($idEtudiant, $passwordHash);
  $appliBD->setUtilisateurPassword($idUtilisateur, $passwordHash);
}


header('Location: page-profil-etudiant.php?id='.$idEtudiant);








?>
