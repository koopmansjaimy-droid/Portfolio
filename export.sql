DROP DATABASE IF EXISTS sterrenstelsel;
CREATE DATABASE sterrenstelsel;
USE sterrenstelsel;

CREATE TABLE planeten (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(100) NOT NULL,
    diameter FLOAT,
    afstand_tot_zon FLOAT,
    massa_tov_aarde FLOAT
);