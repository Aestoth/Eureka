<?PHP
require_once 'connexion.php';
$appliBD = new Connexion();



    /*
     * ================================
     * Operations upon form submission.
     * ================================
     */
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $password = $_POST['password'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $avatar = $_POST['avatar'];
    $jourDisponibles = $_POST['jourDisponibles'];
    $derniereConnexion =  date("Y-m-d");
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    $appliBD->insertEtudiant($nom, $prenom, $passwordHash, $description, $email, $telephone, $avatar, $jourDisponibles, $derniereConnexion);
    
    /* header("Location : page-profil-etudiant.php"); */
                   
     
    print_r($_POST);

?>