CREATE DATABASE "Promenade";
USE "Promenade";

create table Promenades (
    id int primary key AUTO_INCREMENT,
    auteur varchar (255),
    nom varchar (255),
    pays varchar (255),
    ville varchar (255),
    npa varchar (255),
    depart varchar (255),
    arrivee varchar (255),
    itineraire varchar (255)
);

CREATE USER "AdminPromenade"@"%"
IDENTIFIED BY"digital2019";
GRANT ALL PRIVILEGES ON Promenade.*
TO "AdminPromenade"@"%";
FLUSH PRIVILEGES;

-- insérer une promenade

INSERT INTO Promenades (auteur,nom,pays,ville,npa,depart,arrivee,itineraire) VALUES ('Abdi','Lac Léman','Suisse','Genève','1200'
,'Eaux-Vives','Paquis','Rive,Bel-Air,Cornavin');