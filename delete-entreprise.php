<?php

require_once 'connexion.php';
$appliBD = new Connexion();


$delete = $_POST['supprimer'];

$supprimer = $appliBD->deleteEntreprise($id);





 ?>
