-- database: bakkerij wim vlecht
-- bakkerijWimVlecht
CREATE DATABASE bakkerij_wim_vlecht;

USE bakkerij_wim_vlecht;

CREATE TABLE brood (
    id int AUTO_INCREMENT,
    naam varchar(150),
    meel varchar(150),
    gewicht int,
    img_url varchar(150),
    PRIMARY KEY (id)
);


-- Toevoegen Opdracht

-- USE bakkerij_wim_vlecht;

INSERT INTO brood (naam, meel, gewicht, img_url)
VALUES ('brood', 'bloem', 43, 'img/foto21');