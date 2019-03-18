<?php

class Utilisateur {
  protected $id;
  protected $email;
  protected $password;
  protected $role;

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




}//Fin de la Class

 ?>
