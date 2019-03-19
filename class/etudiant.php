<?php

class Etudiant {
  protected $id;
  protected $nom;
  protected $prenom;
  protected $description;
  protected $avatar;
  protected $telephone;
  protected $email;
  protected $jourDisponibles;
  protected $listeMotCles;
  protected $password;
  protected $listeProjets;


  public function __set($name, $value){
  }

  public function getId(){
      return $this->id;
  }

  public function getNom(){
      return $this->nom;
  }

  public function getPrenom(){
        return $this->prenom;
  }

  public function getDescription(){
      return $this->description;
  }

  public function getAvatar(){
        return $this->avatar;
  }

  public function getTelephone(){
        return $this->telephone;
  }


  public function getEmail(){
          return $this->email;
  }


  public function getJourDisponibles(){
          return $this->jourDisponibles;
  }


  public function getListeMotCles(){
          return $this->listeMotCles;
  }

  public function getListeProjets(){
          return $this->listeProjets;
  }


//Functions set///////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function setNom($nom){
      $this->nom = $nom;
  }

  public function setPrenom($prenom){
      $this->prenom = $prenom;
  }

  public function setDescription($description){
        $this->description = $description;
  }

  public function setAvatar($avatar){
      $this->avatar = $avatar;
  }

  public function setTelephone($telephone){
      $this->telephone = $telephone;
  }

  public function setEmail($email){
      $this->email = $email;
  }

  public function setJourDisponibles($jourDisponibles){
      $this->jourDisponibles = $jourDisponibles;
  }

  public function setListeMotCles($listeMotCles){
      $this->listeMotCles = $listeMotCles;
  }






}//fin de class





 ?>
