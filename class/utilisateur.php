<?php

class Utilisateur {
  protected $id;
  protected $email;
  protected $password;
  protected $role;
  protected $derniereConnexion;

  public function __set($name, $value){
  }

  public function getId(){
        return $this->id;
  }


  public function getEmail(){
        return $this->email;
  }

  public function getPassword(){
        return $this->password;
  }

  public function getRole(){
        return $this->role;
  }


  public function getDerniereConnexion(){
        return $this->derniereConnexion;
  }


  public function setDerniereConnexion($derniereConnexion){
      $this->derniereConnexion = $derniereConnexion;
  }




}//Fin de la Class

 ?>
