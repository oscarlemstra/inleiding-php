<?php

class Brood {
    private $id = 0;
    private $naam = "";
    private $meel = "";
    private $gewicht = 0;
    private $img_url = "";


    public function __construct ($id, $naam, $meel, $gewicht, $img_url) {
        $this->id = $id;
        $this->naam = $naam;
        $this->meel = $meel;
        $this->gewicht = $gewicht;
        $this->img_url = $img_url;
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

    public function getImg_url () {
        return $this->img_url;
    }
}