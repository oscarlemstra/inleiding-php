<?php

class Auto {
    private $merk = "";
    private $type = "";
    private $prijs = 0;
    private $url = "";


    public function __construct ($merk, $type, $prijs, $url) {
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->url = $url;
    }

    //methodes voor $merk
    public function setMerk ($merk) {
        $this->merk = $merk;
    }

    public function getMerk () {
        return $this->merk;
    }


    //methodes voor $type
    public function setType ($type) {
        $this->type = $type;
    }

    public function getType () {
        return $this->type;
    }


    //methodes voor $prijs
    public function setPrijs ($prijs) {
        $this->prijs = $prijs;
    }

    public function getPrijs () {
        return $this->prijs;
    }


    //methodes voor $url
    public function setUrl ($url) {
        $this->url = $url;
    }

    public function getUrl () {
        return $this->url;
    }
}