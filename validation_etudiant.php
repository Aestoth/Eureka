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
$avatar = $_FILES["avatar"]["name"];
$jourDisponibles = to_bitfield($_POST['jourDisponibles']);
$derniereConnexion =  date('Y-m-d');
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$suffixe = date("YmdHis");
$uploadedFileName = $_FILES["avatar"]["name"];
$uploadedFile = new SplFileInfo($uploadedFileName);
$fileExtension = $uploadedFile->getExtension();
$destinationFolder = $_SERVER['DOCUMENT_ROOT']."/Projets/Eureka/images";
$destinationName = "/avatar/img-".$suffixe.".".$fileExtension;
$imageMoved = move_uploaded_file($_FILES["avatar"]["tmp_name"], $destinationFolder.$destinationName);


$idEtudiant = $appliBD->insertEtudiant($nom, $prenom, $passwordHash, $description, $email, $telephone, $destinationName, $jourDisponibles, $derniereConnexion);

    

foreach ($_POST["motClesEtudiant"] as $value) {
    $appliBD->insertMotCles_etudiant($idEtudiant, $value);
}

header("Location: page-profil-etudiant.php?id=$idEtudiant");






?>
