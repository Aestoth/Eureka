<?php

require_once 'connexion.php';
$appliBD = new Connexion();


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
$email = $_POST['contactEmail1'];
$contactNom2 = $_POST['contactNom2'];
$contactPrenom2 = $_POST['contactPrenom2'];
$contactEmail2 = $_POST['contactEmail2'];
$contactNom3 = $_POST['contactNom3'];
$contactPrenom3 = $_POST['contactPrenom3'];
$contactEmail3 = $_POST['contactEmail3'];
$passwordHash = password_hash($password, PASSWORD_BCRYPT);
$derniereConnexion = date("Y-m-d");

$suffixe = date("YmdHis");
$uploadedFileName = $_FILES["logo"]["name"];
$uploadedFile = new SplFileInfo($uploadedFileName);
$fileExtension = $uploadedFile->getExtension();
$destinationFolder = $_SERVER['DOCUMENT_ROOT']."/Projets/Eureka/images";
$destinationName = "/logo_entreprise/img-".$suffixe.".".$fileExtension;
$imageMoved = move_uploaded_file($_FILES["logo"]["tmp_name"], $destinationFolder.$destinationName);

$role = 1;
$idUtilisateur = $appliBD->insertUtilisateur($email, $passwordHash, $role, $derniereConnexion);
$idEntreprise = $appliBD->insertEntreprise($nom, $passwordHash, $urlSite, $description, $facebook, $linkedin, $instagram, $secteurAtivite, $logo,
$nombCollaborateurs, $contactNom1, $contactPrenom1, $email, $contactNom2, $contactPrenom2, $contactEmail2, $contactNom3, $contactPrenom3, $contactEmail3, $idUtilisateur);




$utilisateurByEmail = $appliBD->getUtilisateurByEmail($email);
$hash = $utilisateurByEmail->getPassword();
$idUtilisateur = $utilisateurByEmail->getId();
$role = $utilisateurByEmail->getRole();

session_start();
$_SESSION['id'] = $idUtilisateur;
$_SESSION['email'] = $email;
$_SESSION['role'] = $role;


$idEntrepriseByEmail = $appliBD->getEntrepriseByEmail($email);
$idEntreprise = $idEntrepriseByEmail->getId();

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
<style>
/* ------------------------------------- 
		GLOBAL 
------------------------------------- */
* { 
	margin:0;
	padding:0;
}
* { font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; }

img { 
	max-width: 100%; 
}
.collapse {
	margin:0;
	padding:0;
}
body {
	-webkit-font-smoothing:antialiased; 
	-webkit-text-size-adjust:none; 
	width: 100%!important; 
	height: 100%;
}


/* ------------------------------------- 
		ELEMENTS 
------------------------------------- */
a { color: #2BA6CB;}

.btn {
	text-decoration:none;
	color: #FFF;
	background-color: #666;
	padding:10px 16px;
	font-weight:bold;
	margin-right:10px;
	text-align:center;
	cursor:pointer;
	display: inline-block;
}

p.callout {
	padding:15px;
	background-color:#ECF8FF;
	margin-bottom: 15px;
}
.callout a {
	font-weight:bold;
	color: #2BA6CB;
}

table.social {
/* 	padding:15px; */
	background-color: #ebebeb;
	
}
.social .soc-btn {
	padding: 3px 7px;
	font-size:12px;
	margin-bottom:10px;
	text-decoration:none;
	color: #FFF;font-weight:bold;
	display:block;
	text-align:center;
}
a.fb { background-color: #3B5998!important; }
a.tw { background-color: #1daced!important; }
a.gp { background-color: #DB4A39!important; }
a.ms { background-color: #000!important; }

.sidebar .soc-btn { 
	display:block;
	width:100%;
}

/* ------------------------------------- 
		HEADER 
------------------------------------- */
table.head-wrap { width: 100%;}

.header.container table td.logo { padding: 15px; }
.header.container table td.label { padding: 15px; padding-left:0px;}


/* ------------------------------------- 
		BODY 
------------------------------------- */
table.body-wrap { width: 100%;}


/* ------------------------------------- 
		FOOTER 
------------------------------------- */
table.footer-wrap { width: 100%;	clear:both!important;
}
.footer-wrap .container td.content  p { border-top: 1px solid rgb(215,215,215); padding-top:15px;}
.footer-wrap .container td.content p {
	font-size:10px;
	font-weight: bold;
	
}


/* ------------------------------------- 
		TYPOGRAPHY 
------------------------------------- */
h1,h2,h3,h4,h5,h6 {
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; line-height: 1.1; margin-bottom:15px; color:#000;
}
h1 small, h2 small, h3 small, h4 small, h5 small, h6 small { font-size: 60%; color: #6f6f6f; line-height: 0; text-transform: none; }

h1 { font-weight:200; font-size: 44px;}
h2 { font-weight:200; font-size: 37px;}
h3 { font-weight:500; font-size: 27px;}
h4 { font-weight:500; font-size: 23px;}
h5 { font-weight:900; font-size: 17px;}
h6 { font-weight:900; font-size: 14px; text-transform: uppercase; color:#444;}

.collapse { margin:0!important;}

p, ul { 
	margin-bottom: 10px; 
	font-weight: normal; 
	font-size:14px; 
	line-height:1.6;
}
p.lead { font-size:17px; }
p.last { margin-bottom:0px;}

ul li {
	margin-left:5px;
	list-style-position: inside;
}

/* ------------------------------------- 
		RESPONSIVENESS 
------------------------------------- */

/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
.container {
	display:block!important;
	max-width:600px!important;
	margin:0 auto!important; /* makes it centered */
	clear:both!important;
}

/* This should also be a block element, so that it will fill 100% of the .container */
.content {
	padding:15px;
	max-width:600px;
	margin:0 auto;
	display:block; 
}


.content table { width: 100%; }


/* Odds and ends */
.column {
	width: 300px;
	float:left;
}
.column tr td { padding: 15px; }
.column-wrap { 
	padding:0!important; 
	margin:0 auto; 
	max-width:600px!important;
}
.column table { width:100%;}
.social .column {
	width: 280px;
	min-width: 279px;
	float:left;
}

/* Be sure to place a .clear element after each set of columns, just to be safe */
.clear { display: block; clear: both; }


/* ------------------------------------------- 
		PHONE
		For clients that support media queries.
		Nothing fancy. 
-------------------------------------------- */
@media only screen and (max-width: 600px) {
	
	a[class="btn"] { display:block!important; margin-bottom:10px!important; background-image:none!important; margin-right:0!important;}

	div[class="column"] { width: auto!important; float:none!important;}
	
	table.social div[class="column"] {
		width:auto!important;
	}

}
</style>
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
                                                Email: <strong><a href="#"></a></strong></p>

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
$headers = "From:" . $from . "\r\n";
$headers .= "Reply-To: info@Eureka.ch\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
mail($to, $subject, $body, $headers);

header('Location: page-profil-entreprise.php');











 ?>
