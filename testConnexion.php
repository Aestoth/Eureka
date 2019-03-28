
<?php
require 'connexion.php';

$appliBD = new Connexion();

if($appliBD != null){
    echo 'Connexion BD reussie';

} else {
    echo 'Connexion BD échouée';
}


//$etudiant = $appliBD->insertEtudiant('Luiz', 'Inacio', 'blablabla', 'gmascarenhas3001@gmail.com', '079-425-8576', 'avatar', 7);

//var_dump($etudiant);


// $projet = $appliBD->insertProjet("Projet4", "img.jpg", "test", "2019-03-25","AM", "2019-03-26", "PM", "2019-03-27","AM", "workshop", "ouvert", 1 );

// echo $projet;

//$entreprise = $appliBD->insertEntreprise("Hass", "1234", "realise.ch", "blablabla", "facebook.com", "linkdin.com", "instagram.com", "Formation", "dd", 80,
//"veronique", "dubois", "dubois@gmail.com", "cecile", "dupont", "dupont@gmail.com", "sandra", "dupres", "dupres@gmail.com", 1 )

//$fournisseur = $appliBD->insertFournisseur("social-sa", "100,00", "nettoyage", "blablabla", "robert", "marley", "marley@gmail.com", "0791234567", "jamaique 123");


//$listeEntreprise = $appliBD->getListeEntreprise();
//var_dump ($listeEntreprise);

//$listeEtudiant = $appliBD->getEtudiantById(1);
//echo $listeEtudiant->getNom();

//$listeProjet = $appliBD->getProjetById(1);
//var_dump($listeProjet);

//$listeFournisseur = $appliBD->getFournisseurById(1);
//var_dump($listeFournisseur);


//$categories = $appliBD->insertCategories('Autres');
//echo $categories;

//$motCles = $appliBD->insertMotCles("Graphisme");
//echo $motCles;

//$motClesEntreprise = $appliBD->insertMotCles_entreprise(1, 2);

//$deleteEntreprise = $appliBD->deleteEntreprise(2);

//$setEudiantDescrip = $appliBD->setEtudiantDescription(2, "tititi");
//echo $setEudiantDescrip;

//$setEntCntact1 = $appliBD->setEntrepriseContact1(1, " de Castro", "Josue", "josue@gmail.com");

//$motCles_etudiant = $appliBD->insertMotCles_etudiant(1, 6);

//$motClesEtudiant = $appliBD->geEtudiantByMotCles(3);
//echo $motClesEtudiant->getNom();

//$listeEtudiant = $appliBD->getListeEtudiant();
//var_dump($listeEtudiant);
/* $listeMotCles = $appliBD->getEtudiantListeMotCles(1);
var_dump($listeMotCles); */


//$appliBD->insertMotCles_projet(1, 2);

//var_dump($listeProjetEtudiant);


//$motClesProjet = $appliBD->insertMotCles_projet(1, 2);
//var_dump($motClesProjet);


//$listeProjetEtudiant = $appliBD->getListeProjetEtudiant(1);
//var_dump($listeProjetEtudiant);

//$listeProjetEntreprise = $appliBD->insertRelationEntrepriseProjet(1, 2);

// $lit = $appliBD->getListeProjetEntreprise(1);
// var_dump($lit);


//$email = $appliBD->getEntrepriseByEmail("josue@gmail.com");
//echo $email->getPassword();

//$listeMotCles = $appliBD->getListeMotCles();
//var_dump($listeMotCles);

//$nom = $appliBD->insertAdministrateur("infologo.ch", );

//echo $nom->getId();





/*$email = "infologo";
$password = "infologo";
$passwordHash = password_hash($password, PASSWORD_BCRYPT);


$role = 3;
$idUtilisateur = $appliBD->insertUtilisateur($email, $passwordHash, $role);
$idAdministrateur = $appliBD->insertAdministrateur($email, $passwordHash, $idUtilisateur);*/



//$listAdmin = $appliBD->getAdministrateurByEmail("infologo");
//echo $listAdmin->getId();

//$listeEtudiant = $appliBD->getListeEtudiant();


 //$actuelConnexion = $appliBD->setDateConnexion(24, "2019-02-22");

//$motCles = $appliBD->setEtudiantMotCles(5, 3);


/*$idUtilisateur = $appliBD->insertUtilisateur("gugugugu", "edede", 1, "2019-01-19");
echo "</br>".$idUtilisateur;*/

/* $projet = $appliBD->getProjetByEntreprise(27);
echo $projet->getTitre(); */

// $entreprise = $appliBD->getEntrepriseByProjet(1);
// var_dump ($entreprise);

$etat = "en cours";
$projetsActifs = $appliBD->getProjetByEtat($etat);
var_dump ($projetsActifs);



<<<<<<< HEAD
//$projet = $appliBD->getProjetByEntreprise(27);
//echo $projet->getTitre();

/*if($nom != null && !empty($nom)){
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
=======
>>>>>>> master


if($newEmail != null && !empty($newEmail)){
  $appliBD->setEtudiantEmail($idEtudiant, $newEmail);
  $appliBD->setUtilisateurEmail($idUtilisateur, $newEmail);
  $_SESSION['email'] = $newEmail;
}*/

/*$listeMotClesEtudiant = $appliBD->getEtudiantListeMotCles(9);
var_dump($listeMotClesEtudiant);*/








 ?>
