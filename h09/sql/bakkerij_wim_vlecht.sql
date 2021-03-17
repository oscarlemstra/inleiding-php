-- database: bakkerij wim vlecht

CREATE DATABASE bakkerij_wim_vlecht;

USE bakkerij_wim_vlecht;

CREATE TABLE brood (
    id int,
    naam varchar(50),
    meel varchar(50),
    gewicht int,
    vorm varchar(50)
);