<?php
    $zwemClubInfo = array("De spartelkuikens"=>25, "De waterbuffels"=>32, "Plonsmderin"=>11, "Bommetje"=>23);

    foreach ($zwemClubInfo as $clubNaam => $aantalLeden) {
        echo "<div style='width: 150px; display: inline-block'>";

        echo $clubNaam;
        $aantalPlaatjes = $aantalLeden / 5;

        for ($i = 1; $i <= $aantalPlaatjes; $i++) {
            echo "<img src='../../img/zwem.jpg' width='80px' style='display: block'>";
        }
        echo "</div>";
    }
?>