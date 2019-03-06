<?php

class Administrateur {
  protected $password;
  protected $listeEntreprises;
  protected $listeEtudiants;
  protected $listeFournisseurs;

  public function __set($name, $value){
  }

  public function getListeEntreprises(){
        return $this->listeEntreprises;
  }

  public function getListeEtudiants(){
        return $this->listeEtudiants;
  }

  public function getListeFournisseurs(){
        return $this->listeFournisseurs;
  }




}//Fin de la Class

 ?>
