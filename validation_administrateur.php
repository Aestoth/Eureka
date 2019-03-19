<?php


require_once 'connexion.php';
$appliBD = new Connexion();


$email = $_POST['email'];
$password = $_POST['password'];
$passwordHash = password_hash($password, PASSWORD_BCRYPT);


$role = 3;
$idUtilisateur = $appliBD->insertUtilisateur($email, $passwordHash, $role);
$idAdministrateur = $appliBD->insertAdministrateur($email, $passwordHash, $idUtilisateur);




 ?>
