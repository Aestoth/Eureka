<?php

class Fournisseur {
  protected $id;
  protected $nomSociete;
  protected $categories;
  protected $prix;
  protected $descriptionService;
  protected $nomService;
  protected $nom;
  protected $prenom;
  protected $email;
  protected $telephone;
  protected $adresse;
  protected $listeCategories;



    public function __set($name, $value){
    }

    public function getId(){
        return $this->id;
    }

    public function getNomSociete(){
        return $this->nomSociete;
    }

    public function getCategories(){
        return $this->categories;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function getDescriptionService(){
        return $this->descriptionService;
    }

    public function getNomService(){
        return $this->nomService;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }


    public function getEmail(){
       return $this->email;
    }

    public function getTelephone(){
       return $this->telephone;
    }

    public function getAdresse(){
       return $this->adresse;
    }

    public function getListeCategories(){
       return $this->listeCategories;
    }



//Functions Set///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function setCategories($categories){
      $this->categories = $categories;
    }

    public function setPrix($prix){
      $this->prix = $prix;
    }


    public function setDescriptionService($descriptionService){
      $this->descriptionService = $descriptionService;
    }


    public function setNomService($nomService){
      $this->nomService = $nomService;
    }


    public function setNom($nom){
      $this->nom = $nom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setTelephone($telephone){
        $this->telephone = $telephone;
    }

    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }







}//Fin de la Class


 ?>
