<?php

$MotClesEtudiant = [2, 3, 4];
$MotClesProjet = [8, 6, 5];
$MotClesEntreprise = [9, 1, 5];
$match = 0;
foreach ($MotClesEtudiant as $motClesE) {
  foreach ($MotClesProjet as $motClesP) {
    if($motClesE == $motClesP){
      $match += 1;
    }
  }
}

  foreach ($MotClesEtudiant as $motClesE) {
    foreach ($MotClesEntreprise as $motClesEnt) {
      if($motClesE == $motClesEnt){
      $match += 1;
     }
    }
  }

echo $match;



?>
