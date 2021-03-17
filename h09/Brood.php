<?php

class Brood {
    private $id = 0;
    private $naam = "";
    private $meel = "";
    private $gewicht = 0;
    private $vorm;


    public function __construct ($id, $naam, $meel, $gewicht, $vorm) {
        $this->id = $id;
        $this->naam = $naam;
        $this->meel = $meel;
        $this->gewicht = $gewicht;
        $this->vorm = $vorm;
    }


    //methodes
    public function getId () {
        return $this->id;
    }

    public function getNaam () {
        return $this->naam;
    }

    public function getMeel () {
        return $this->meel;
    }

    public function getGewicht () {
        return $this->gewicht;
    }

    public function getVorm () {
        return $this->vorm;
    }
}