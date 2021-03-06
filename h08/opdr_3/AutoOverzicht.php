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
            if ($merk == "alle-auto's" && $minPrijs == "" && $maxPrijs == "") {
                $gefilterdeLijst[] = $auto;
            }
            else if ($merk == "alle-auto's" && $auto->getPrijs() >= $minPrijs && $maxPrijs == "") {
                $gefilterdeLijst[] = $auto;
            }
            else if ($merk == "alle-auto's" && $minPrijs == "" && $auto->getPrijs() <= $maxPrijs) {
                $gefilterdeLijst[] = $auto;
            }
            else if ($merk == "alle-auto's" && $auto->getPrijs() >= $minPrijs && $auto->getPrijs() <= $maxPrijs) {
                $gefilterdeLijst[] = $auto;
            }
            else if ($auto->getMerk() == $merk && $auto->getPrijs() >= $minPrijs && $auto->getPrijs() <= $maxPrijs) {
                $gefilterdeLijst[] = $auto;
            }
            else if ($auto->getMerk() == $merk && $auto->getPrijs() >= $minPrijs && $maxPrijs == "") {
                $gefilterdeLijst[] = $auto;
            }
            else if ($auto->getMerk() == $merk && $minPrijs == "" && $auto->getPrijs() <= $maxPrijs) {
                $gefilterdeLijst[] = $auto;
            }
            else if ($auto->getMerk() == $merk && $minPrijs == "" && $maxPrijs == "") {
                $gefilterdeLijst[] = $auto;
            }
        }

        return $gefilterdeLijst;
    }
}