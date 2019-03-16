<?php

    require_once 'connexion.php';
    $appliBD = new Connexion();




    $nomSociete = $_POST['nomSociete'];
    $prix = $_POST['prix'];
    $nomService = $_POST['nomService'];
    $descriptionService = $_POST['descriptionService'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];


    $idFournisseur = $appliBD->insertFournisseur($nomSociete, $prix, $nomService, $descriptionService, $nom, $prenom, $email, $telephone, $adresse);


    //  header("Location: page-fournisseur.php?id=$idFournisseur");









 ?>
