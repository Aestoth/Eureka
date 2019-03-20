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
$derniereConnexion = date("Y-m-d");
$jourDisponibles = to_bitfield($_POST['jourDisponibles']);
$passwordHash = password_hash($password, PASSWORD_BCRYPT);




$role = 2;
$idUtilisateur = $appliBD->insertUtilisateur($email, $passwordHash, $role, $derniereConnexion);
$idEtudiant = $appliBD->insertEtudiant($nom, $prenom, $passwordHash, $description, $email, $telephone, $avatar, $jourDisponibles, $idUtilisateur);



foreach ($_POST["motClesEtudiant"] as $value) {
    $appliBD->insertMotCles_etudiant($idEtudiant, $value);
}

header("Location: page-profil-etudiant.php?id=$idEtudiant");






?>
