<?php
    class Aap {
        private $naam = "";
        Private $url = "";

        // methodes voor $naam
        function setNaam ($naam) {
            $this->naam = $naam;
        }

        function getNaam () {
            return $this->naam;
        }


        // methodes voor $url
        function setUrl ($zoekTerm) {
            $this->url = "https://www.google.nl/search?q=".$zoekTerm."&tbm=isch";
        }

        function getUrl () {
            return $this->url;
        }
    }
?>