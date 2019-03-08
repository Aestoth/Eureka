<?php

include 'class/entreprise.php';
include 'class/etudiant.php';
include 'class/projet.php';
include 'class/fournisseur.php';
include 'class/administrateur.php';

class Connexion {
    private $connexion;

    public function __construct() {
        $PARAM_hote= 'localhost';
        $PARAM_port='3306';
        $PARAM_nom_bd='Eureka';
        $PARAM_utilisateur='eurekaAdmin';
        $PARAM_mot_passe='Eurek@';

        try{
            $this->connexion = new PDO(
                'mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,
                $PARAM_utilisateur,
                $PARAM_mot_passe);

        }catch (Exception $e){
            echo 'Erreur : '.$e->getMessage().'<br>';
            echo 'N° :'.$e->getCode();
        }
    }


  public function getConnexion(){
    return $this->connexion;
  }


  ///Function InsertEntreprise/////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function insertEntreprise($nom,$password,$urlSite, $description, $facebook, $linkdin, $instagram, $secteurAtivite, $logo, $nombCollaborateurs,
    $contactNom1, $contactPrenom1, $contactEmail1, $contactNom2, $contactPrenom2, $contactEmail2, $contactNom3, $contactPrenom3, $contactEmail3 ){

      $requete_prepare = $this->connexion->prepare("
      INSERT INTO Entreprise (nom, password, urlSite, description, facebook, linkdin, instagram, secteurAtivite, logo, nombCollaborateurs,
      contactNom1, contactPrenom1, contactEmail1, contactNom2, contactPrenom2, contactEmail2, contactNom3, contactPrenom3, contactEmail3 )
      values (:nom, :password, :urlSite, :description, :facebook, :linkdin, :instagram, :secteurAtivite, :logo, :nombCollaborateurs,
      :contactNom1, :contactPrenom1, :contactEmail1, :contactNom2, :contactPrenom2, :contactEmail2, :contactNom3, :contactPrenom3, :contactEmail3)");
      $requete_prepare->execute(
        array(
              'nom'=> $nom,
              'password'=> $password,
              'urlSite' => $urlSite,
              'description' => $description,
              'facebook' => $facebook,
              'linkdin' => $linkdin,
              'instagram' => $instagram,
              'secteurAtivite' => $secteurAtivite,
              'logo' => $logo,
              'nombCollaborateurs' => $nombCollaborateurs,
              'contactNom1' => $contactNom1,
              'contactPrenom1' => $contactPrenom1,
              'contactEmail1' => $contactEmail1,
              'contactNom2' => $contactNom2,
              'contactPrenom2' => $contactPrenom2,
              'contactEmail2' => $contactEmail2,
              'contactNom3' => $contactNom3,
              'contactPrenom3' => $contactPrenom3,
              'contactEmail3' => $contactEmail3
            )
        );
        $idEntreprise= $this->connexion->lastInsertId();
        return $idEntreprise;
    }



  //Function InsertEtudiant//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function insertEtudiant($nom, $prenom, $description, $email, $telephone, $avatar, $jourDisponibles){

      $requete_prepare = $this->connexion->prepare("
       INSERT INTO Etudiant (nom, prenom, description, email, telephone, avatar, jourDisponibles) values (:nom, :prenom, :description, :email, :telephone, :avatar, :jourDisponibles)");
      $requete_prepare->execute(
        array(
              'nom'=> $nom,
              'prenom'=> $prenom,
              'description' => $description,
              'email' => $email,
              'telephone' => $telephone,
              'avatar' => $avatar,
              'jourDisponibles'=> $jourDisponibles
            )
        );

        print_r($requete_prepare->errorInfo());

        $idEtudiant = $this->connexion->lastInsertId();
        return $idEtudiant;

  }



    //Function InsertProjet//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function insertProjet($titre, $photo, $description, $date1, $date2, $date3, $typeEvenement, $etatProjet, $idEntreprise){

      $requete_prepare = $this->connexion->prepare("
       INSERT INTO Projet (titre, photo, description, date1, date2, date3, typeEvenement, etatProjet, idEntreprise)
        values (:titre, :photo, :description, :date1, :date2, :date3, :typeEvenement, :etatProjet, :idEntreprise)");
      $requete_prepare->execute(
        array(
              'titre'=> $titre,
              'photo'=> $photo,
              'description' => $description,
              'date1' => $date1,
              'date2' => $date2,
              'date3'=> $date3,
              'typeEvenement'=> $typeEvenement,
              'etatProjet'=> $etatProjet,
              'idEntreprise'=> $idEntreprise
            )
        );

        print_r($requete_prepare->errorInfo());
        $idProjet = $this->connexion->lastInsertId();
        return $idProjet;
  }



///Funstion insertFournisseur////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function insertFournisseur($nomSociete, $prix, $nomService, $descriptionService, $nom, $prenom, $email, $telephone, $adresse){

      $requete_prepare = $this->connexion->prepare("
       INSERT INTO Fournisseur (nomSociete, prix, nomService, descriptionService, nom, prenom, email, telephone, adresse)
        values (:nomSociete, :prix, :nomService, :descriptionService, :nom, :prenom, :email, :telephone, :adresse)");
      $requete_prepare->execute(
        array(
              'nomSociete'=> $nomSociete,
              'prix'=> $prix,
              'nomService' => $nomService,
              'descriptionService' => $descriptionService,
              'nom'=> $nom,
              'prenom'=> $prenom,
              'email'=> $email,
              'telephone'=> $telephone,
              'adresse'=> $adresse
            )
        );
        $idFournisseur = $this->connexion->lastInsertId();
        return $idFournisseur;
  }



//Functiont insert Categorie///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function insertCategories($nomCategories){

     $requete_prepare = $this->connexion->prepare("
       INSERT INTO Categories (nomCategories)
        values (:nomCategories)");
      $requete_prepare->execute(
        array(
              'nomCategories'=> $nomCategories
            )
        );
        $categorie = $this->connexion->lastInsertId();
        return $categorie;
  }


  //Function insert RelationCategories/////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function insertRelationCategories ($idFournisseur, $idCategories) {

      $requete_prepare = $this->connexion->prepare(
        "INSERT INTO RelationCategories (idFournisseur, idCategories)
                 values (:idFournisseur, :idCategories)");

       $requete_prepare->execute(
        array(
               'idFournisseur' => $idFournisseur,
               'idCategories' => $idCategories
             )
        );
          return true;
  }


//Function insert MotCles/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function insertMotCles($nom){

     $requete_prepare = $this->connexion->prepare("
       INSERT INTO MotCles (nom)
        values (:nom)");
      $requete_prepare->execute(
        array(
              'nom'=> $nom
            )
        );
        $listeMotCles = $this->connexion->lastInsertId();
        return $listeMotCles;
  }


//Function insert MotCles_entreprise/////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function insertMotCles_entreprise ($idEntreprise, $idMotCles) {

      $requete_prepare = $this->connexion->prepare(
        "INSERT INTO MotCles_entreprise (idEntreprise, idMotCles)
                 values (:idEntreprise, :idMotCles)");

       $requete_prepare->execute(
        array(
               'idEntreprise' => $idEntreprise,
               'idMotCles' => $idMotCles
             )
        );
        return true;
    }


//Function insert MotCles_etudiant/////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function insertMotCles_etudiant ($idEtudiant, $idMotCles) {

      $requete_prepare = $this->connexion->prepare(
        "INSERT INTO MotCles_etudiant (idEtudiant, idMotCles)
                 values (:idEtudiant, :idMotCles)");

       $requete_prepare->execute(
        array(
               'idEtudiant' => $idEtudiant,
               'idMotCles' => $idMotCles
             )
        );
            return true;
    }

//Function insert MotCles_projet/////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function insertMotCles_projet ($idProjet, $idMotCles) {

      $requete_prepare = $this->connexion->prepare(
        "INSERT INTO MotCles_projet (idProjet, idMotCles)
                 values (:idProjet, :idMotCles)");

       $requete_prepare->execute(
        array(
               'idProjet' => $idProjet,
               'idMotCles' => $idMotCles
             )
        );
            return true;
    }


//////Function Liste Entreprise///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function getListeEntreprise(){
    $requete_prepare =$this->connexion->prepare(
      "SELECT * FROM Entreprise");

      $requete_prepare->execute();

      $listeEntreprise = $requete_prepare->fetchAll(PDO::FETCH_CLASS, 'Entreprise');
      return $listeEntreprise;
  }

///Function entreprise by id///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function getEntrepriseById($id){
    $requete_prepare = $this->connexion->prepare(
      "SELECT *
      FROM Entreprise
      WHERE id = :id"
    );
    $requete_prepare->execute(array("id"=>$id));

    $entreprise = $requete_prepare->fetchObject("Entreprise");
    return $entreprise;
  }

///Function Liste Etudiant//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function getListeEtudiant(){
    $requete_prepare =$this->connexion->prepare(
      "SELECT * FROM Etudiant");

      $requete_prepare->execute();

      $listeEtudiant = $requete_prepare->fetchAll(PDO::FETCH_CLASS, 'Etudiant');
      return $listeEtudiant;
  }


///Function Etudiant by id///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function getEtudiantById($id){
    $requete_prepare = $this->connexion->prepare(
      "SELECT *
      FROM Etudiant
      WHERE id = :id"
    );
    $requete_prepare->execute(array("id"=>$id));

    $etudiant = $requete_prepare->fetchObject("Etudiant");
    return $etudiant;
  }


///Function Liste Fournisseurs/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function getListeFournisseur(){
    $requete_prepare =$this->connexion->prepare(
      "SELECT * FROM Fournisseur");

      $requete_prepare->execute();

      $listeFournisseur = $requete_prepare->fetchAll(PDO::FETCH_CLASS, 'Fournisseur');
      return $listeFournisseur;
  }


///Function Fournisseur by id///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function getFournisseurById($id){
    $requete_prepare = $this->connexion->prepare(
      "SELECT *
      FROM Fournisseur
      WHERE id = :id"
    );
    $requete_prepare->execute(array("id"=>$id));

    $fournisseur = $requete_prepare->fetchObject("Fournisseur");
    return $fournisseur;
  }

///Function Liste Projets/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function getListeProjet(){
    $requete_prepare =$this->connexion->prepare(
      "SELECT * FROM Projet");

      $requete_prepare->execute();

      $listeProjets = $requete_prepare->fetchAll(PDO::FETCH_CLASS, 'Projet');
      return $listeProjets;
  }


///Function Projet by id///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function getProjetById($id){
    $requete_prepare = $this->connexion->prepare(
      "SELECT *
      FROM Projet
      WHERE id = :id"
    );
    $requete_prepare->execute(array("id"=>$id));

    $projet = $requete_prepare->fetchObject("Projet");
    return $projet;
  }


///Function Delete Entreprise/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  function deleteEntreprise($id) {

    $requete_prepare = $this->connexion->prepare(
    "DELETE
    FROM Entreprise
    WHERE id = :id"
    );
      $requete_prepare->execute(array("id"=>$id));

      $requete_prepare->fetchObject("Entreprise");
  }

///Function Delete Etudiant////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  function deleteEtudiant($id) {

    $requete_prepare = $this->connexion->prepare(
    "DELETE
    FROM Etudiant
    WHERE id = :id"
    );
      $requete_prepare->execute(array("id"=>$id));

      $requete_prepare->fetchObject("Etudiant");
  }

///Function Delete Fournisseur////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  function deleteFournisseur($id) {

    $requete_prepare = $this->connexion->prepare(
    "DELETE
    FROM Fournisseur
    WHERE id = :id"
    );
      $requete_prepare->execute(array("id"=>$id));

      $requete_prepare->fetchObject("Fournisseur");
  }

//Function Delete Projet//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  function deleteProjet($id) {

    $requete_prepare = $this->connexion->prepare(
    "DELETE
    FROM Projet
    WHERE id = :id"
    );
      $requete_prepare->execute(array("id"=>$id));

      $requete_prepare->fetchObject("Projet");
  }



  //Function Set Etreprise////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function setEntreprise($id, $nom, $password, $urlSite, $description, $facebook, $linkdin, $instagram, $secteurAtivite, $logo, $nombCollaborateurs,
     $contactNom1, $contactPrenom1, $contactEmail1, $contactNom2, $contactPrenom2, $contactEmail2, $contactNom3, $contactPrenom3, $contactEmail3) {

      $requete_prepare = $this->connexion->prepare(
       "UPDATE Entreprise
       SET nom = '$nom',
         password = '$password',
         urlSite = '$urlSite',
         description = '$description',
         facebook = '$facebook',
         linkdin = '$linkdin',
         instagram = '$instagram',
         secteurAtivite = '$secteurAtivite',
         logo = '$logo',
         nombCollaborateurs = '$nombCollaborateurs',
         contactNom1 = '$contactNom1',
         contactPrenom1 = '$contactPrenom1',
         contactEmail1 = '$contactEmail1',
         contactNom2 = '$contactNom2',
         contactPrenom2 = '$contactPrenom2',
         contactEmail2 = '$contactEmail2',
         contactNom3 = '$contactNom3',
         contactPrenom3 = '$contactPrenom3',
         contactEmail3 = '$contactEmail3'
        WHERE id = :id"
       );
       $requete_prepare->execute(array("id"=>$id));

      $newDonnes = $requete_prepare->fetchObject("Entreprise");
       return $newDonnes;

  }

//Function Set Entreprise Contac 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function setEntrepriseContact1($id, $contactNom1, $contactPrenom1, $contactEmail1) {
    $requete_prepare = $this->connexion->prepare(
     "UPDATE Entreprise
      SET contactNom1 = '$contactNom1',
          contactPrenom1 = '$contactPrenom1',
          contactEmail1 = '$contactEmail1'
       WHERE id = :id"
   );
   $requete_prepare->execute(array("id"=>$id));

   $newContact1 = $requete_prepare->fetchObject("Entreprise");
    return $newContact1;

}

//Function Set Entreprise Contac 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function setEntrepriseContact2($id, $contactNom2, $contactPrenom2, $contactEmail2) {
    $requete_prepare = $this->connexion->prepare(
     "UPDATE Entreprise
      SET contactNom2 = '$contactNom2',
          contactPrenom2 = '$contactPrenom2',
          contactEmail2 = '$contactEmail2'
       WHERE id = :id"
   );
   $requete_prepare->execute(array("id"=>$id));

   $newContact2 = $requete_prepare->fetchObject("Entreprise");
    return $newContact2;

}


//Function Set Entreprise Contac 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function setEntrepriseContact3($id, $contactNom3, $contactPrenom3, $contactEmail3) {
    $requete_prepare = $this->connexion->prepare(
     "UPDATE Entreprise
      SET contactNom3 = '$contactNom3',
          contactPrenom3 = '$contactPrenom3',
          contactEmail3 = '$contactEmail3'
       WHERE id = :id"
   );
   $requete_prepare->execute(array("id"=>$id));

   $newContact3 = $requete_prepare->fetchObject("Entreprise");
    return $newContact3;

}


//Function Set Etudiant////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function setEtudiant($id, $nom, $prenom, $description, $email, $telephone, $avatar, $jourDisponibles) {

    $requete_prepare = $this->connexion->prepare(
     "UPDATE Etudiant
     SET nom = '$nom',
       prenom = '$prenom',
       description = '$description',
       email = '$email',
       telephone = '$telephone',
       avatar = '$avatar',
       jourDisponibles = '$jourDisponibles'
     WHERE id = :id"
     );
     $requete_prepare->execute(array("id"=>$id));

    $newDonnes = $requete_prepare->fetchObject("Etudiant");
     return $newDonnes;

}

//Function Set Etudiant description/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function setEtudiantDescription($id, $description) {
    $requete_prepare = $this->connexion->prepare(
     "UPDATE Etudiant
      SET description = '$description'
       WHERE id = :id"
   );
   $requete_prepare->execute(array("id"=>$id));

   print_r($requete_prepare->errorInfo());

   $newDescription = $requete_prepare->fetchObject("Etudiant");
    return $newDescription;

}

//Function Set Etudiant Jour Disponibles///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function setEtudiantJourDisponibles($id, $jourDisponibles) {
    $requete_prepare = $this->connexion->prepare(
     "UPDATE Etudiant
     SET jourDisponibles = '$jourDisponibles'
     WHERE id = :id"
   );
   $requete_prepare->execute(array("id"=>$id));

   $newJourDisponibles = $requete_prepare->fetchObject("Etudiant");
   return $newJourDisponibles;

}

//Function Set Projet///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function setEtatProjet($id, $etatProjet) {
    $requete_prepare = $this->connexion->prepare(
     "UPDATE Projet
     SET etatProjet = '$etatProjet'
     WHERE id = :id"
   );
   $requete_prepare->execute(array("id"=>$id));

   $newEtatProjet = $requete_prepare->fetchObject("Projet");
   return $newEtatProjet;

 }


//Function Set Photo Projet//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function setPhotoProjet($id, $photo) {
    $requete_prepare = $this->connexion->prepare(
     "UPDATE Projet
     SET photo = '$photo'
     WHERE id = :id"
   );
   $requete_prepare->execute(array("id"=>$id));

   $newPhotoProjet = $requete_prepare->fetchObject("Projet");
   return $newPhotoProjet;

  }


//Function Compter l'Etat du Projet////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function countEtatProjet() {
    $requete_prepare = $this->connexion->prepare(
      "SELECT COUNT(*) FROM Projet
      WHERE etatProjet = 't'"
    );

   $requete_prepare->execute();

   $nombEtatProjet = $requete_prepare->fetch();
    return $nombEtatProjet;
}

//Function Get Entreprise liste de Mot Cles////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function getEtrepriseMotCles($idEtreprise) {

    $requete_prepare=$this->connexion->prepare(
        "SELECT nom FROM MotCles m
        INNER JOIN MotCles_entreprise
        ON idMotCles = m.Id
        WHERE idEntreprise = :Id");

    $requete_prepare->execute(
        array("Id"=> $idEtreprise));

    $motClesEntreprise = $requete_prepare->fetchAll(PDO::FETCH_OBJ);

    return $motClesEntreprise;

}

//Function Get Etudiant liste de Mot Cles////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function getEtudiantMotCles($idEtudiant) {

    $requete_prepare=$this->connexion->prepare(
        "SELECT nom FROM MotCles m
        INNER JOIN MotCles_etudiant
        ON idMotCles = m.Id
        WHERE idEtudiant = :Id");

    $requete_prepare->execute(
        array("Id"=> $idEtudiant));

    $motClesEtudiant = $requete_prepare->fetchAll(PDO::FETCH_OBJ);

    return $motClesEtudiant;

}



//Function Get Projet liste de Mot Cles////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function getProjetMotCles($idProjet) {

    $requete_prepare=$this->connexion->prepare(
        "SELECT nom FROM MotCles m
        INNER JOIN MotCles_projet
        ON idMotCles = m.Id
        WHERE idProjet = :Id");

    $requete_prepare->execute(
        array("Id"=> $idProjet));

    $motClesProjet = $requete_prepare->fetchAll(PDO::FETCH_OBJ);

    return $motClesProjet;

}


//Function Etudiant by mot Cles///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function geEtudiantByMotCles($idMotCles){

   $requete_prepare = $this->connexion->prepare(
   "SELECT *
    FROM MotCles_etudiant me
    INNER JOIN Etudiant e
    ON me.idEtudiant = e.id
    where me.idMotCles = :idMotCles");
     $requete_prepare->execute(array("idMotCles"=>$idMotCles));

     $resultat = $requete_prepare->fetchObject("Etudiant");
     return $resultat;

}


//Function Etreprise by mot Cles///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function geEtudiantByMotCles($idMotCles){

   $requete_prepare = $this->connexion->prepare(
   "SELECT *
    FROM MotCles_entreprise me
    INNER JOIN Entreprise e
    ON me.idEntreprise = e.id
    where me.idMotCles = :idMotCles");
     $requete_prepare->execute(array("idMotCles"=>$idMotCles));

     $resultat = $requete_prepare->fetchObject("Entreprise");
     return $resultat;

}


//Function Projet by mot Cles///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function geEtudiantByMotCles($idMotCles){

   $requete_prepare = $this->connexion->prepare(
   "SELECT *
    FROM MotCles_projet me
    INNER JOIN Projet e
    ON me.idProjet = e.id
    where me.idMotCles = :idMotCles");
     $requete_prepare->execute(array("idMotCles"=>$idMotCles));

     $resultat = $requete_prepare->fetchObject("Projet");
     return $resultat;

}










}//Fin de la class Connexion
 ?>
