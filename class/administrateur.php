<?php

class Administrateur {
  protected $id;
  protected $email;
  protected $password;
  protected $listeEtudiant;


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

  public function getListeEtudiant(){
        return $this->listeEtudiant;
  }



}//Fin de la Class

 ?>
