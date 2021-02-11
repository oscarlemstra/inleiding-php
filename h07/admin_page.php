<?php
    include 'check_login.php';
    checkInlog();


    if ($_SESSION['rol'] == "administrator") {
        echo "Dit is de admin overzicht van ".$_SESSION['gebruiker'].".";
    }
    else {
        echo "Je hebt onvoldoende rechten om deze pagina te bezoeken.";
    }

    echo "<br><br>"."<a href='user_page.php'>account</a>";
    echo "<br><br>"."<a href='inlog.php?loguit'>uitloggen</a>";
?>