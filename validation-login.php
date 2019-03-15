
<?php


require_once 'connexion.php';
$appliBD = new Connexion();





$contactEmail1 = $_POST['contactEmail1'];
$password = $_POST['password'];

  $entrepriseByEmail = $appliBD->getEntrepriseByContactEmail1($contactEmail1);

  $hash = $entrepriseByEmail->getPassword();

  $idEntreprise = $entrepriseByEmail->getId();


  if(password_verify($password, $hash)) {
      session_start();
      $_SESSION['id'] = $idEntreprise;

      header('Location: page-profil-entreprise.php?id='.$idEntreprise);

}


?>
