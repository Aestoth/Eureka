
CREATE DATABASE ProjetEureka;

CREATE USER 'projetEurekaAdmin'@'localhost' IDENTIFIED BY 'Eurek@';
 GRANT ALL PRIVILEGES ON ProjetEureka.* TO 'projetEurekaAdmin'@'localhost';


 CREATE TABLE Utilisateur (
   id int(100) AUTO_INCREMENT,
   email VARCHAR(255),
   password VARCHAR(255),
   role INT(100),
   derniereConnexion VARCHAR(255),
   PRIMARY KEY (id)
 );


 CREATE TABLE Entreprise (
    id INT(100) AUTO_INCREMENT,
    nom VARCHAR(255),
    password VARCHAR(255),
    urlSite VARCHAR(255),
    description VARCHAR(3000),
    facebook VARCHAR(255),
    linkedin VARCHAR(255),
    instagram VARCHAR(255),
    secteurAtivite VARCHAR(255),
    logo VARCHAR(255),
    nombCollaborateurs int(100),
    contactNom1 VARCHAR(255),
    contactPrenom1 VARCHAR(255),
    contactEmail1 VARCHAR(255),
    contactNom2 VARCHAR(255),
    contactPrenom2 VARCHAR(255),
    contactEmail2 VARCHAR(255),
    contactNom3 VARCHAR(255),
    contactPrenom3 VARCHAR(255),
    contactEmail3 VARCHAR(255),
    idUtilisateur INT(100),
    PRIMARY KEY (id),
    FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur(id)
);

CREATE TABLE Projet (
    id INT(100) AUTO_INCREMENT,
    titre VARCHAR(255),
    photo VARCHAR(255),
    description VARCHAR(3000),
    date1 VARCHAR(255),
    periode1 VARCHAR(100),
    date2 VARCHAR(255),
    periode2 VARCHAR(100),
    date3 VARCHAR(255),
    periode3 VARCHAR(100),
    typeEvenement VARCHAR(255),
    etatProjet VARCHAR(255),
    datesDisponibles INT (100),
    idEntreprise INT(100),
    PRIMARY KEY (id),
    FOREIGN KEY (idEntreprise) REFERENCES Entreprise(id)
);


CREATE TABLE Avatar (
    id int(100) AUTO_INCREMENT,
    imageAvatar VARCHAR(200),
    PRIMARY KEY (id)
);


CREATE TABLE Etudiant (
    id INT(100) AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    password VARCHAR(255),
    description VARCHAR(3000),
    email VARCHAR(255),
    telephone VARCHAR(20),
    avatar INT(100),
    jourDisponibles int(100),
    idUtilisateur INT (100),
    PRIMARY KEY (id),
    FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur(id),
    FOREIGN KEY (avatar) REFERENCES Avatar(id)
);

CREATE TABLE Fournisseur (
    id INT(100) AUTO_INCREMENT,
    nomSociete VARCHAR(255),
    prix VARCHAR(255),
    nomService VARCHAR(255),
    descriptionService VARCHAR(300),
    nom VARCHAR(255),
    prenom VARCHAR(255),
    email VARCHAR(255),
    telephone VARCHAR(255),
    adresse VARCHAR(300),
    PRIMARY KEY (id)
);

CREATE TABLE Administrateur (
  id INT(100) AUTO_INCREMENT,
  email VARCHAR(255),
  password VARCHAR(255),
  idUtilisateur INT(100),
  PRIMARY KEY (id),
  FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur(id)
);

CREATE TABLE MotCles (
  id int(100) AUTO_INCREMENT,
  nom VARCHAR(255),
  PRIMARY KEY (id)
);


CREATE TABLE MotCles_etudiant (
  idEtudiant int(100),
  idMotCles int(100),
  PRIMARY KEY (idEtudiant, idMotCles),
  FOREIGN KEY (idMotCles) REFERENCES MotCles(id),
  FOREIGN KEY (idEtudiant) REFERENCES Etudiant(id)
);

CREATE TABLE MotCles_projet (
  idProjet int(100),
  idMotCles int(100),
  PRIMARY KEY (idProjet, idMotCles),
  FOREIGN KEY (idMotCles) REFERENCES MotCles(id),
  FOREIGN KEY (idProjet) REFERENCES Projet(id)
);

CREATE TABLE Notifications (
  id int(100) AUTO_INCREMENT,
  idEtudiant int(100),
  idProjet int(100),
  PRIMARY KEY (id),
  FOREIGN KEY (idEtudiant) REFERENCES Etudiant(id),
  FOREIGN KEY (idProjet) REFERENCES Projet(id)
);

CREATE TABLE Categories (
  id int(100) AUTO_INCREMENT,
  nomCategories VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE RelationCategories (
  idFournisseur int(100),
  idCategories int(100),
  PRIMARY KEY (idFournisseur, idCategories),
  FOREIGN KEY (idCategories) REFERENCES Categories(id),
  FOREIGN KEY (idFournisseur) REFERENCES Fournisseur(id)
);


CREATE TABLE Relation_Etudiant_Projet (
  idEtudiant int,
  idProjet int,
  PRIMARY KEY (idEtudiant, idProjet),
  FOREIGN KEY (idProjet) REFERENCES Projet(id),
  FOREIGN KEY (idEtudiant) REFERENCES Etudiant(id)
);

