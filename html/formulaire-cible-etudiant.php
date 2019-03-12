<?php
require 'connexion.php';
$appliBD = new Connexion();






$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_BCRYPT);
$description = $_POST['description'];
$email = $_POST["email"];
$telephone = $_POST['telephone'];
$avatar = $_POST['avatar'];
$jourDisponibles = $_POST['jourDisponibles'];

// j'appelle la base de donnée et les functions pour insérer les données du nouvelle utilisateur
$idEtudiant = $appliBD->insertEtudiant($nom, $prenom, $hash, $description, $email, $telephone, $avatar, $jourDisponibles );

foreach ($_POST["motCles"] as $idMotCles) {
    $appliBD->insertMotCles_etudiant($idEtudiant, $idMotCles);
}
// je redirige sur la page du nouveau profil
header("Location: page-profil-etudiant?id=$idEtudiant");

?>
