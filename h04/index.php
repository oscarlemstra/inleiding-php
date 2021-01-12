<?php
    //opdracht 1
    echo "<h4>Opdracht 1</h4>";

    function celsiusNaarFahrenheit ($celsius) {
        $fahrenheit = $celsius * 1.8 + 32;

        echo $celsius." °C = ".$fahrenheit." °F";
    }
    celsiusNaarFahrenheit(22);


    //opdracht 2
    echo "<br><br>"."<h4>Opdracht 2</h4>";

    function deelbaarDoor3 ($getal) {
        if ($getal % 3 == 0) {
            $isDeelbaarDoor3 = true;
        }
        else {
            $isDeelbaarDoor3 = false;
        }

        return $isDeelbaarDoor3;
    }

    $waarde = 357;
    if (deelbaarDoor3($waarde) == true) {
        echo $waarde." is deelbaar door 3";
    }
    else {
        echo $waarde." is niet deelbaar door 3";
    }


    //opdracht 3 versie 1
    echo "<br><br>"."<h4>Opdracht 3 versie 1</h4>";

    function tekstDraaier ($tekst) {
        return strrev($tekst);
    }
    echo tekstDraaier(".roggebrood is lekker vooral met pindakaas en hagelslaG");


    //opdracht 3 versie 2
    echo "<br><br>"."<h4>Opdracht 3 versie 2</h4>";

    function tekstDraaier2 ($tekst) {
        $letterLijst = str_split($tekst);
        $tekensAantal = count($letterLijst);

        $gedraaideWaarde = "";

        for ($i = $tekensAantal; $i > 0; $i--) {
            $gedraaideWaarde .= $letterLijst[$i - 1]; // - 1 houd rekening met de array telling
        }

        return $gedraaideWaarde;
    }
    echo tekstDraaier2(".maar een broodje met rundvlees salade is ook erg lekkeR");
?>