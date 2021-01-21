<?php
    $allesIngevuld = false;
    $aantalIngevuld = 0;
    $postLengte = count($_POST);

    foreach ($_POST as $item => $value) {
        if ($value == "") {
            echo "Je bent je ".$item." vergeten in te vullen,"."<br>";
            echo "ga <a href='index.php'>terug<a>.";
            break;
        } else {
            $aantalIngevuld++;
        }

        if ($aantalIngevuld == $postLengte) {
            $allesIngevuld = true;
        }
    }

    if ($allesIngevuld == true) {
        foreach ($_POST as $item => $value) {
            if ($item != "wachtwoord" && $item != "knop") {
                echo $item.": ".$value."<br><br>";
            }
        }
    }
?>