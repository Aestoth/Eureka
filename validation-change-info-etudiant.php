<?php


require_once 'connexion.php';
require_once 'bit_count.php';
$appliBD = new Connexion();

session_start();
$email = $_SESSION['email'];

$etudiantByEmail = $appliBD->getEtudiantByEmail($email);
$idEtudiant = $etudiantByEmail->getId();


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$password = $_POST['password'];
$description = $_POST['description'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$jourDisponibles = to_bitfield($_POST['jourDisponibles']);
$passwordHash = password_hash($password, PASSWORD_BCRYPT);


$newInfo = $appliBD->setEtudiant($idEtudiant, $nom, $prenom, $passwordHash, $description, $email, $telephone, $jourDisponibles);

$motCles = $_POST['motClesEtudiant'];
    $appliBD->replaceMotClesEtudiant($idEtudiant, $motCles);


header('Location: page-profil-etudiant.php?id='.$idEtudiant);








?>
