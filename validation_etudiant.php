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
session_start();
$_SESSION['id'] = $idUtilisateur;
$_SESSION['email'] = $email;
$_SESSION['role'] = $role;


$idEtudiantByEmail = $appliBD->getEtudiantByEmail($email);
$idEtudiant = $idEtudiantByEmail->getId();

//Email de bienvenue/////////////////////////////////////////////////////////////////

//--Start mail Type--//
$to = $email;
$subject = "Bienvenue sur le site Eureka.ch";
$from = 'info@Eureka.ch';
$body = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- If you delete this meta tag, Half Life 3 will never be released. -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Eureka</title>

<link rel="stylesheet" type="text/css" href="Eureka/css/email.css" />

</head>

<body bgcolor="#FFFFFF">

<!-- HEADER -->
<table class="head-wrap" bgcolor="#999999">
    <tr>
        <td></td>
        <td class="header container" >

                <div class="content">
                <table bgcolor="#999999">
                    <tr>
                        <td><img src="Eureka/images/eureka-light.png" /></td>
                    </tr>
                </table>
                </div>

        </td>
        <td></td>
    </tr>
</table><!-- /HEADER -->


<!-- BODY -->
<table class="body-wrap">
    <tr>
        <td></td>
        <td class="container" bgcolor="#FFFFFF">

            <div class="content">
            <table>
                <tr>
                    <td>
                        <h3>Bienvenue sur le site Eureka</h3>
                        <p class="lead">Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae.</p>
                        <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. consequat vel lacus. Sed iaculis pulvinar ligula, ornare fringilla ante viverra et. In hac habitasse platea dictumst. Donec vel orci mi, eu congue justo. Integer eget odio est, eget malesuada lorem. Aenean sed tellus dui, vitae viverra risus. Nullam massa sapien, pulvinar eleifend fringilla id, convallis eget nisi. Mauris a sagittis dui. Pellentesque non lacinia mi. Fusce sit amet libero sit amet erat venenatis sollicitudin vitae vel eros. Cras nunc sapien, interdum sit amet porttitor ut, congue quis urna.</p>
                        <!-- social & contact -->
                        <table class="social" width="100%">
                            <tr>
                                <td>

                                    <!-- column  -->
                                    <table align="left" class="column">
                                        <tr>
                                            <td>

                                                <h5 class="">Contact:</h5>
                                                <p>Téléphone: <strong>022 707 74 74</strong><br/>
                                                Email: <strong><a href="#">#/a></strong></p>

                                            </td>
                                        </tr>
                                    </table><!-- /column 2 -->

                                    <span class="clear"></span>

                                </td>
                            </tr>
                        </table><!-- /social & contact -->

                    </td>
                </tr>
            </table>
            </div><!-- /content -->

        </td>
        <td></td>
    </tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<table class="footer-wrap">
    <tr>
        <td></td>
        <td class="container">

                <!-- content -->
                <div class="content">
                <table>
                <tr>
                    <td align="center">
                        <p>
                            <a href="#">Terms</a> |
                            <a href="#">Privacy</a> |
                        </p>
                    </td>
                </tr>
            </table>
                </div><!-- /content -->

        </td>
        <td></td>
    </tr>
</table><!-- /FOOTER -->

</body>
</html>';
//--mail Type--//
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = "From:" . $from . "\r\n" .
"Reply-To: " . 'info@Eureka.ch' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $body, $headers);

header("Location: page-profil-etudiant.php");






?>
