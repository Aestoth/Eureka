<?php


require_once 'connexion.php';
$appliBD = new Connexion();
session_start();
$email = $_SESSION['email'];
$admin = $appliBD->getAdministrateurByEmail($email);
$idAdministrateur = $admin->getId();

$emailEtudiant = $_POST["emailEtudiant"];
$etudiant = $appliBD->getEtudiantByEmail($emailEtudiant);
$user = $appliBD->getUtilisateurByEmail($emailEtudiant);

$appliBD->deleteEtudiant($etudiant->getId());

$appliBD->deleteUtilisateur($user->getId());

header("Location: page-profil-administrateur.php?id=$idAdministrateur");

 ?>
