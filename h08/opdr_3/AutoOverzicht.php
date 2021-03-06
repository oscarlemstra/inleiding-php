<?php

class AutoOverzicht {
    private $autoos = array();


    public function voegAutoToe ($auto) {
        $this->autoos[] = $auto;
    }

    public function getAutoLijst () {
        return $this->autoos;
    }

    public function getGefilterdeLijst ($merk, $minPrijs, $maxPrijs) {
        $gefilterdeLijst = [];

        foreach ($this->autoos as $auto) {
            if ($auto->getMerk() == $merk && $auto->getPrijs() >= $minPrijs && $auto->getPrijs() <= $maxPrijs) {
                $gefilterdeLijst[] = $auto;
                echo "error 1"."<br>";
            }
            else if ($auto->getMerk() == $merk && $auto->getPrijs() >= $minPrijs && $maxPrijs == "") {
                $gefilterdeLijst[] = $auto;
                echo "error 2"."<br>";
            }
            else if ($auto->getMerk() == $merk && $minPrijs == "" && $auto->getPrijs() <= $maxPrijs) {
                $gefilterdeLijst[] = $auto;
                echo "error 3"."<br>";
            }
            else if ($auto->getMerk() == $merk && $minPrijs == "" && $maxPrijs == "") {
                $gefilterdeLijst[] = $auto;
                echo "error 4"."<br>";
            }
            else if ($merk == "alle-auto's" || $merk == "" && $minPrijs == "" && $maxPrijs == "") {
                $gefilterdeLijst[] = $auto;
                echo "error 5"."<br>";
            }
            else if ($merk == "alle-auto's" && $auto->getPrijs() >= $minPrijs && $maxPrijs == "") {
                $gefilterdeLijst[] = $auto;
                echo "error 6"."<br>";
            }
            else if ($merk == "alle-auto's" && $minPrijs == "" && $auto->getPrijs() <= $maxPrijs) {
                $gefilterdeLijst[] = $auto;
                echo "error 7"."<br>";
            }
            else if ($merk == "alle-auto's" && $auto->getPrijs() >= $minPrijs && $auto->getPrijs() <= $maxPrijs) {
                $gefilterdeLijst[] = $auto;
                echo "error 8"."<br>";
            }
        }

        return $gefilterdeLijst;
    }
}