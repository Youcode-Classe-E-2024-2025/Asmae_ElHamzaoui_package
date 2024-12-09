
CREATE DATABASE gestion_packages ; -- creation du base de donnee

USE gestion_packages; --l'utilisation du base de donnee 

-- tableau package 
CREATE TABLE package (
  id_Package INT PRIMARY KEY AUTO_INCREMENT ,
  nom_Package VARCHAR(255) NOT NULL ,
  desc_Package VARCHAR(255) NOT NULL,
  url_Package VARCHAR(255) NOT NULL
);

-- tableau auteur
CREATE TABLE auteur (
  id_Auteur INT PRIMARY KEY AUTO_INCREMENT ,
  nom_Auteur VARCHAR(255) NOT NULL ,
  prenom_Auteur VARCHAR(255) NOT NULL,
  email_Auteur VARCHAR(255) NOT NULL UNIQUE ,
  date_inscription_Auteur VARCHAR(255) NOT NULL
);

-- tableau de jointure 
CREATE TABLE colaborations ( 
  id_Package INT,
  id_Auteur INT,
  PRIMARY KEY (id_Package,id_Auteur),
  FOREIGN KEY (id_Package) REFERENCES package(id_Package),
  FOREIGN KEY (id_Auteur)  REFERENCES auteur(id_Auteur)
);


-- tableau des versions  
CREATE TABLE version ( 
  id_Version INT PRIMARY KEY AUTO_INCREMENT,
  id_Package INT,
  num_version VARCHAR(255) NOT NULL,
  date_sortie_version VARCHAR(255) NOT NULL,
  FOREIGN KEY (id_Package) REFERENCES package(id_Package)
);

SELECT * FROM  auteur;