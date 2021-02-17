<?php
include 'Radioprogramma.php';

$mijnRadioProgramma = new Radioprogramma();

foreach ($mijnRadioProgramma->getProgramma() as $info) {
    echo $info."<br>";
}

echo "<br><br>";

foreach ($mijnRadioProgramma->getLiedjes() as $liedje) {
    echo $liedje."<br>";
}
?>