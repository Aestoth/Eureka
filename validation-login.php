
<?php


require_once 'connexion.php';
$appliBD = new Connexion();



$email = $_POST['email'];
$password = $_POST['password'];
$derniereConnexion = date("Y-m-d");



  $utilisateurByEmail = $appliBD->getUtilisateurByEmail($email);
  if($utilisateurByEmail === false){
      header('Location: page-login.php');
      exit();
  }

  $hash = $utilisateurByEmail->getPassword();
  $idUtilisateur = $utilisateurByEmail->getId();
  $role = $utilisateurByEmail->getRole();


  if(password_verify($password, $hash)) {
      session_start();
      $_SESSION['id'] = $idUtilisateur;
      $_SESSION['email'] = $email;
      $_SESSION['role'] = $role;


   if($role == 1){
     $idEntrepriseByEmail = $appliBD->getEntrepriseByEmail($email);
     $idEntreprise = $idEntrepriseByEmail->getId();
     $appliBD->setDateConnexion($idUtilisateur, $derniereConnexion);
    
    header('Location: page-profil-entreprise.php?id='.$idEntreprise);


   }elseif($role == 2){
      $listEtudiant = $appliBD->getEtudiantByEmail($email);
      $idEtudiant = $listEtudiant->getId();
      $appliBD->setDateConnexion($idUtilisateur, $derniereConnexion);

      header('Location: page-profil-etudiant.php?id='.$idEtudiant);

   }else{
         $listAdmin = $appliBD->getAdministrateurByEmail($email);
         $idAdministrateur = $listAdmin->getId();
        header('Location: page-profil-administrateur.php?id='.$idAdministrateur);
      }


  }else{
      header('Location: page-login.php');
  }
?>
