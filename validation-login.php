
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

  $idEntrepriseByEmail = $appliBD->getEntrepriseByEmail($email);

  $idEntreprise = $idEntrepriseByEmail->getId();

  if(password_verify($password, $hash)) {
      session_start();
      $_SESSION['id'] = $idUtilisateur;
      $_SESSION['email'] = $email;
      $_SESSION['role'] = $role;

      }

   if($role === 1){
    header('Location: page-profil-entreprise.php?id='.$idEntreprise);

    }if($role === 2){
        header('Location: page-profil-etudiant.php?id='.$idEtudiant);

       }else{
        header('Location: page-profil-administrateur.php?id='.$idAdministrateur);
      }

?>
