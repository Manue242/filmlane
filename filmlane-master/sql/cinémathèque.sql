-- Créer la base de données
CREATE DATABASE cinémathèque;

-- Sélectionner la base de données
USE cinémathèque;

-- Créer une table
CREATE TABLE Utilisateur (
  Id_user INT NOT NULL,
  nom_user VARCHAR(50) NOT NULL,
  mot_de_passe VARCHAR (255) NOT NULL,
  email varchar(100) NOT NULL,
  constraint pk_Utilisateur primary key(Id_user)
); 

CREATE TABLE Réalisateur (
    Id_rea INT PRIMARY KEY NOT NULL,
    nom_rea VARCHAR(50) NOT NULL,
    prenom_rea VARCHAR (50) NOT NULL,
    date_naiss_rea date NOT NULL,
    nationalite_rea varchar(50) NOT NULL,
    biographie_rea text,
    constraint pk_Réalisateur primary key(Id_rea)
    
);

CREATE TABLE ParticipationDebat (
    Id_user NOT NULL,
    Id_debat INT NOT NULL,
    constraint fk_ParticipationDebat foreign key(Id_user)
    references Utilisateur(Id_user),
    constraint fk_ParticipationDebat foreign key(Id_debat)
    references Debat(Id_debat)

);




CREATE TABLE ParticipationEven (
    Id_even INT NOT NULL,
    Id_user INT NOT NULL,
    constraint pk_ParticipationEven primary key(Id_even) 
    constraint fk_ParticipationEven foreign key (Id_user)
    references Utilisateur(Id_user)
);



CREATE TABLE Film (
    Id_film int NOT NULL,
    titre varchar(100) NOT NULL,
    duree varchar(5) NOT NULL,
    date_sortie date NOT NULL,
    version varchar(50) NOT NULL,
    genre varchar (50) NOT NULL,
    critique text NOT NULL,
    Id_rea INT NOT NULL,
    constraint pk_Film primary key(Id_film),
    constraint fk_Film foreign key (Id_rea)
    references Réalisateur (Id_rea),
   
);




CREATE TABLE Evenement (
    ID_even NOT NULL
    nom_even varchar NOT NULL ,
    type_even varchar NOT NULL,
    date_even date NOT NULL,
    lieu varchar NOT NULL,
    description_even longtext NOT NULL,
    constraint pk_Evenement primary key(ID_even),
);

CREATE TABLE Debat (
    Id_debat INT NOT NULL,
    sujet varchar(100) NOT NULL,
    description_debat text NOT NULL,
    date_debut date NOT NULL,
    date_fin date NOT NULL,
    constraint pk_Debat primary key(Id_debat),

);

CREATE TABLE Avis(
    Id_avis INT NOT NULL,
    contenu text NOT NULL,
    Id_film int NOT NULL,
    Id_user int NOT NULL,
    constraint pk_Avis primary key(Id_avis),
    constraint fk_Avis foreign key (Id_film)
    references Film (Id_film),
    constraint fk_Avis foreign key (Id_user)
    references Utilisateur (Id_user),
);


CREATE TABLE Acteur (
    Id_acteur INT NOT NULL,
    nom_acteur varchar (50) NOT NULL,
    prenom_acteur varchar (50) NOT NULL,
    date_naiss_acteur date NOT NULL,
    nationalite_acteur varchar(50) NOT NULL,
    biographie_acteur text NOT NULL,
    constraint pk_Acteur primary key (Id_acteur),
);

CREATE TABLE Role ( 
    Id_film INT NOT NULL,
    Id_acteur INT NOT NULL,
    nom_role varchar(50)NOT NULL,
    prix_obtenu varchar(100) NOT NULL,
    constraint fk_Role foreign key (Id_film)
    references Film (Id_film),
    constraint fk_Role foreign key (Id_acteur)
    references Acteur (Id_acteur),

);


