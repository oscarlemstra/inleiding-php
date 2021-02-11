<?php
    include 'check_login.php';
    checkInlog();


    echo "Welkom ".$_SESSION['gebruiker'].", u bent ".$_SESSION['rol'].".";

    echo "<br><br>"."<a href='admin_page.php'>admin</a>";
    echo "<br><br>"."<a href='inlog.php?loguit'>uitloggen</a>";
?>