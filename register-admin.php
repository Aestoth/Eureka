<?php
require_once ('connexion.php');
$appliBD = new connexion();

session_start();

?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>My Website</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Favicon and touch icons -->
	<!-- <link rel="shortcut icon" href="assets/ico/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->

</head>

<body class="register-body">

	<!-- Content -->
	<div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6 mx-auto auto">
                <div class="card card-signin flex-row my-5">
                    <div class="card-body">
                    <h5 class="card-title text-center">Register</h5>
                        <form class="form-signin" action="validation_administrateur.php" method="POST">
                            <div class="form-label-group">
								<label for="inputUserame">Email</label>
                                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-label-group margin-50px-top">
								<label for="inputPassword">Password</label>
                                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password">
                            </div>                           
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="register">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Javascript -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
	<script src="assets/js/scripts.js"></script>

</body>

</html>