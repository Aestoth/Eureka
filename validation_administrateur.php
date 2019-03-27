<?php


require_once 'connexion.php';
$appliBD = new Connexion();


$email = $_POST['email'];
$password = $_POST['password'];
$passwordHash = password_hash($password, PASSWORD_BCRYPT);
$derniereConnexion = date("Y-m-d");


$role = 3;
$idUtilisateur = $appliBD->insertUtilisateur($email, $passwordHash, $role, $derniereConnexion);
$idAdministrateur = $appliBD->insertAdministrateur($email, $passwordHash, 55);


header("Location: page-profil-administrateur.php?id=$idAdministrateur");

 ?>
