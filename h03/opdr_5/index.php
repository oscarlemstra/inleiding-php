<?php
    $reisPrijs = 10;

    $leeftijdOud = 65;
    $leeftijdJong = 12;
    $leeftijdGratis = 3;

    $kortingOudEnJong = 50;
    $kortingGratis = 0;

    $leeftijd = 12;

    if ($leeftijd > $leeftijdOud) {
        echo "prijs = € ". $reisPrijs / 100 * $kortingOudEnJong;
    }
    else if ($leeftijd <= $leeftijdJong && $leeftijd >= $leeftijdGratis) {
        echo "prijs = € ". $reisPrijs / 100 * $kortingOudEnJong;
    }
    else if ($leeftijd < $leeftijdGratis) {
        echo "prijs = € ". $reisPrijs / 100 * $kortingGratis;
    }
    else {
        echo "prijs = € ". $reisPrijs;
    }
?>