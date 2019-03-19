
<?php


require_once 'connexion.php';
$appliBD = new Connexion();



$email = $_POST['email'];
$password = $_POST['password'];
$derniereConnexion = date("Y-m-d");

  $utilisateurByEmail = $appliBD->getUtilisateurByEmail($email);

  $hash = $utilisateurByEmail->getPassword();

  $idUtilisateur = $utilisateurByEmail->getId();

  $role = $utilisateurByEmail->getRole();


  if(password_verify($password, $hash)) {
      session_start();
      $_SESSION['id'] = $idUtilisateur;
      $_SESSION['email'] = $email;
      $_SESSION['role'] = $role;

   if($role == "Entreprise"){
    header('Location: page-profil-entreprise.php?id='.$idUtilisateur);

      }if($role = "Etudiant"){
        header('Location: page-profil-etudiant.php?id='.$idUtilisateur);

      }else{
        header('Location: page-profil-administrateur.php?id='.$idUtilisateur);
      }
  }
?>
