CREATE DATABASE forum;

CREATE TABLE utilisateur(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(45) NOT NULL,
    nomUtilisateur VARCHAR(45) NOT NULL,
    motDePasse VARCHAR(88) NOT NULL,
    dateDeNaissance DATE NOT NULL
);

CREATE TABLE forum(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(40) NOT NULL,
    article TEXT NOT NULL,
    date DATE NOT NULL,
    auteur VARCHAR(40) NOT NULL,
    utilisateur_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id)
);

select * from utilisateur;