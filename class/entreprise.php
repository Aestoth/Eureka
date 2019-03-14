<?php

class Entreprise {
  protected $id;
  protected $nom;
  protected $password;
  protected $urlSite;
  protected $description;
  protected $facebook;
  protected $linkdin;
  protected $instagram;
  protected $secteurAtivite;
  protected $logo;
  protected $nombCollaborateurs;
  protected $contactNom1;
  protected $contactPrenom1;
  protected $contactEmail1;
  protected $contactNom2;
  protected $contactPrenom2;
  protected $contactEmail2;
  protected $contactNom3;
  protected $contactPrenom3;
  protected $contactEmail3;
  protected $listeProjets;
  protected $listeMotCles;

  public function __set($name, $value){
  }

  public function getId(){
      return $this->id;
  }

  public function getNom(){
        return $this->nom;
  }

  public function getUrlSite(){
        return $this->urlSite;
  }

  public function getDescription(){
      return $this->description;
  }

  public function getFacebook(){
        return $this->facebook;
  }

  public function getLinkdin(){
        return $this->linkdin;
  }

  public function getInstagram(){
        return $this->instagram;
  }

  public function getSecteurAtivite(){
        return $this->secteurAtivite;
  }

  public function getLogo(){
        return $this->logo;
  }

  public function getNombCollaborateurs(){
        return $this->nombCollaborateurs;
  }

  public function getContactNom1(){
        return $this->contactNom1;
  }

  public function getContactPrenom1(){
        return $this->contactPrenom1;
  }

  public function getContactEmail1(){
        return $this->contactPrenom1;
  }

  public function getContactNom2(){
        return $this->contactNom1;
  }

  public function getContactPrenom2(){
        return $this->contactPrenom1;
  }

  public function getContactEmail2(){
        return $this->contactPrenom1;
  }

  public function getContactNom3(){
        return $this->contactNom1;
  }

  public function getContactPrenom3(){
        return $this->contactPrenom1;
  }

  public function getContactEmail3(){
        return $this->contactPrenom1;
  }

  public function getListeProjets(){
        return $this->listeProjets;
  }

  public function getListeMotCles(){
        return $this->listeMotCles;
  }

  //Functions Set///////////////////////////////////////////////////////////////////////////////////////////////////////



  public function setNom($nom){
      $this->nom = $nom;
  }

  public function setUrlSite($urlSite){
      $this->urlSite = $urlSite;
  }

  public function setDescription($description){
        $this->description = $description;
  }

  public function setSecteurAtivite($secteurAtivite){
        $this->secteurAtivite = $secteurAtivite;
  }

  public function setLogo($logo){
        $this->logo = $logo;
  }

  public function setNombCollaborateurs($nombCollaborateurs){
        $this->nombCollaborateurs = $nombCollaborateurs;
  }

  public function setContactNom1($contactNom1){
        $this->contactNom1 = $contactNom1;
  }

  public function setContactPrenom1($contactPrenom1){
        $this->contactPrenom1 = $contactPrenom1;
  }

  public function setContactEmail1($contactEmail1){
        $this->contactEmail1 = $contactEmail1;
  }

  public function setContactNom2($contactNom2){
        $this->contactNom2 = $contactNom2;
  }

  public function setContactPrenom2($contactPrenom2){
        $this->contactPrenom2 = $contactPrenom2;
  }

  public function setContactEmail2($contactEmail2){
        $this->contactEmail2 = $contactEmail2;
  }

  public function setContactNom3($contactNom3){
        $this->contactNom3 = $contactNom3;
  }

  public function setContactPrenom3($contactPrenom3){
        $this->contactPrenom3 = $contactPrenom3;
  }

  public function setContactEmail3($contactEmail3){
        $this->contactEmail3 = $contactEmail3;
  }

  public function setListeMotCles($listeMotCles){
        $this->listeMotCles = $listeMotCles;
  }


}//Fin de la Class


 ?>
