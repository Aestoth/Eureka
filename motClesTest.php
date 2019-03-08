<?php

$MotClesEtudiant = [2, 3, 4];
$MotClesProjet = [8, 1, 5];
$MotClesEntreprise = [2, 4, 5];

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

if($match != null){
echo $match;

} else{
echo "Pas de Match!";

}


?>
