<?php

class Administrateur {
  protected $id;
  protected $email;
  protected $password;


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




}//Fin de la Class

 ?>
