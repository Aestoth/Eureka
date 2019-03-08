<?php

$MotClesEtudiant = [2, 3, 4];
$MotClesProjet = [3, 6, 5];
$match = 0;
foreach ($MotClesEtudiant as $motClesE) {
  foreach ($MotClesProjet as $motClesP) {
    if($motClesE == $motClesP){
      $match += 1;
    }
  }
}
echo $match;



?>
