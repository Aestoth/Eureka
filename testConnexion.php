
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

//$projet = $appliBD->insertProjet("Bootcamp", "photo", "rrrrrrrrrr", "11111","000", "22222", "00", "33333","0", "workshop", "termine", 1 );

//echo $projet;

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


 $appliBD->setEntreprise();





 ?>
