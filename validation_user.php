<?PHP
    require_once 'connexion.php';
    require_once 'bit_count.php';
    $appliBD = new Connexion();


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $password = $_POST['password'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $avatar = $_POST['avatar'];
    $jourDisponibles = to_bitfield($_POST['jourDisponibles']);
    $derniereConnexion =  date('Y-m-d');
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    $appliBD->insertEtudiant($nom, $prenom, $passwordHash, $description, $email, $telephone, $avatar, $jourDisponibles, $derniereConnexion);
    
    
                   
     
    print_r($_POST);

?>