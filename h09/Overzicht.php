<?php

class Overzicht {
    private $broodjes = array();


    public function voegBroodjeToe ($broodje) {
        $this->broodjes[] = $broodje;
    }

    public function getOverzicht () {
        return $this->broodjes;
    }
}