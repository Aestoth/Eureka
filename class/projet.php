<?php

class Projet {
  protected $id;
  protected $titre;
  protected $photo;
  protected $description;
  protected $date1;
  protected $date2;
  protected $date3;
  protected $type_evenement;
  protected $etatProjet;
  protected $listeMotCles;

  public function __set($name, $value){
  }

  public function getId(){
      return $this->id;
  }

  public function getTitre(){
      return $this->titre;
  }

  public function getPhoto(){
      return $this->photo;
  }

  public function getDescription(){
      return $this->description;
  }

  public function getDate1(){
      return $this->date1;
  }

  public function getDate2(){
      return $this->date2;
  }

  public function getDate3(){
      return $this->date3;
  }

  public function getType_evenement(){
      return $this->type_evenement;
  }

  public function getEtatProjet(){
      return $this->etatProjet;
  }

  public function getListeMotCles(){
      return $this->$listeMotCles;
  }


//Functions set////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function setEtatProjet($etatProjet){
      $this->etatProjet = $etatProjet;
  }

  public function setPhoto($Photo){
      $this->photo = $Photo;
  }




}//Fin de la Class

 ?>
