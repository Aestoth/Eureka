<?php
require 'connexion.php';
$appliBD = new connexion();


//Récupérer tous les projets etat en cours
$etat = "en cours";
$projetsActifs = $appliBD->getProjetByEtat($etat);

// Pour chaque projet
foreach ($projetsActifs as $projet) {
    $idProjet = $projet->getId();
    $listeEtudiantMatching = $appliBD->getEtudiantByProjetMatching($idProjet);
    
    // get entreprise from projet id;
    $entrepriseProjet = $appliBD->getEntrepriseByProjet($idProjet);
    // protection si par hasard un projet existe mais n'a pas d'entreprise
    if(!$entrepriseProjet){
        continue;
    }
    $emailEntreprise = $entrepriseProjet->getContactEmail1();
     
    foreach ($listeEtudiantMatching as $etudiant) {
        $idEtudiants = $etudiant->getId();
        $emailEtudiant = $etudiant->getEmail();
    
        /*    
        * Enable error reporting
        */
            
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        
        /*
        * Setup email addresses and change it to your own
        */
        $from = $emailEntreprise;
        $to = "your.emailaddress@gmail.com";
        $subject = "Simple test for mail function";
        $message = "This is a test to check if php mail function sends out the email";
        $headers = "From: " . $emailEntreprise . "\r\n" .
        "Reply-To: " . $emailEntreprise . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        /*
        * Test php mail function to see if it returns "true" or "false"
        * Remember that if mail returns true does not guarantee
        * that you will also receive the email
        */
            
        $emailSent = mail($to, $subject, $message, $headers);
        if ($emailSent) {                            
            echo "Test email send to ".$to."<br/>";
            $etatEmail = "Sent";
            $notifications = $appliBD->insertNotifications($etatEmail, $idEtudiants, $idProjet);
        } else {
            echo "Failed to send to ".$to."<br/>";
        }
    }       
}    

// fin de projet
