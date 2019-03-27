<?php


require_once 'connexion.php';
$appliBD = new Connexion();

session_start();
$contactEmail1 = $_SESSION['email'];
$utilisateurByEmail = $appliBD->getUtilisateurByEmail($contactEmail1);

$idUtilisateur = $utilisateurByEmail->getId();
$idEntrepriseByEmail = $appliBD->getEntrepriseByEmail($contactEmail1);
$idEntreprise = $idEntrepriseByEmail->getId();


$nom = $_POST['nom'];
$password = $_POST['password'];
$urlSite = $_POST['urlSite'];
$description = $_POST['description'];
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$instagram = $_POST['instagram'];
$secteurAtivite =  $_POST['secteurAtivite'];
$logo = $_FILES["logo"]["name"];
$nombCollaborateurs = $_POST['nombCollaborateurs'];
$contactNom1 = $_POST['contactNom1'];
$contactPrenom1 = $_POST['contactPrenom1'];
$newContactEmail1 = $_POST['contactEmail1'];
$contactNom2 = $_POST['contactNom2'];
$contactPrenom2 = $_POST['contactPrenom2'];
$contactEmail2 = $_POST['contactEmail2'];
$contactNom3 = $_POST['contactNom3'];
$contactPrenom3 = $_POST['contactPrenom3'];
$contactEmail3 = $_POST['contactEmail3'];
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$suffixe = date("YmdHis");
$uploadedFileName = $_FILES["logo"]["name"];
$uploadedFile = new SplFileInfo($uploadedFileName);
$fileExtension = $uploadedFile->getExtension();
$destinationFolder = $_SERVER['DOCUMENT_ROOT']."/Projets/Eureka/images";
$destinationName = "/logo_entreprise/img-".$suffixe.".".$fileExtension;
$imageMoved = move_uploaded_file($_FILES["logo"]["tmp_name"], $destinationFolder.$destinationName);


$appliBD->setEntreprise($idEntreprise, $nom, $urlSite, $description, $facebook, $linkedin, $instagram, $secteurAtivite,
$nombCollaborateurs, $contactNom1, $contactPrenom1, $contactNom2, $contactPrenom2, $contactEmail2, $contactNom3, $contactPrenom3, $contactEmail3);


/*if($logo != null && !empty($logo)){
  $appliBD->setEntrepriseLogo($id, $logo)

}*/

if($newContactEmail1 != null && !empty($newContactEmail1)){
  $appliBD->setEntrepriseContactEmail1($idEntreprise, $newContactEmail1);
  $appliBD->setUtilisateurEmail($idUtilisateur, $newContactEmail1);
  $_SESSION['email'] = $newContactEmail1;
}

if($password != null && !empty($password)){
  $appliBD->setEntreprisePassword($idEntreprise, $passwordHash);
  $appliBD->setUtilisateurPassword($idUtilisateur, $passwordHash);
}


header('Location: page-profil-entreprise.php?id='.$idEntreprise);





 ?>
