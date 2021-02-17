<?php
class Radioprogramma {
    private $programmanaam = "Kinder radio NL";
    private $omschrijving = "Leuke kinderliedjes";
    private $liedjes = array("Smurfenlied", "De ganzenpas", "Op een grote paddestoel", "Ik zag twee beren broodjes smeren");

    public function getLiedjes () {
        return $this->liedjes;
    }

    public function getProgramma () {
        return array($this->programmanaam, $this->omschrijving);
    }
}
?>