<?php

require_once 'connexion.php';
$appliBD = new Connexion();

session_start();
$email = $_SESSION['email'];
$admin = $appliBD->getAdministrateurByEmail($email);
$idAdministrateur = $admin->getId();



$emailEntreprise = $_POST["emailEntreprise"];
$entreprise = $appliBD->getEntrepriseByEmail($emailEntreprise);
$user = $appliBD->getUtilisateurByEmail($emailEntreprise);
$idEntreprise = $entreprise->getId();

$listeProjet = $appliBD->getListeProjetEntreprise($idEntreprise);

foreach ($listeProjet as $projet) {
    $appliBD->deleteProjet($projet->getId());
}


$appliBD->deleteEntreprise($entreprise->getId());

$appliBD->deleteUtilisateur($user->getId());

header("Location: page-profil-administrateur.php?id=$idAdministrateur");





 ?>
