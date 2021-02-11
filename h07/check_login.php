<?php
    //u91058p86256_
    session_start();

    function controleerAccountInput ($inputGebruiker, $inputWachtwoord) {
        $host = "localhost";
        $port = "3306";
        $user = "u91058p86256_schooluser";
        $pass = "school";
        $db = "u91058p86256_school2";
        $query = "SELECT * from account_h7 WHERE gebruiker = '".$inputGebruiker."'";

        $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port, $user, $pass);


        foreach ($dbh->query($query) as $row) {
            if ($row['gebruiker'] == $inputGebruiker && $row['wachtwoord'] == $inputWachtwoord) {
                $_SESSION['gebruiker'] = $row['gebruiker'];
                $_SESSION['wachtwoord'] = $row['wachtwoord'];
                $_SESSION['rol'] = $row['rol'];

                return true;
            }
        }
        return false;
    }


    function checkInlog () {
        if (!isset($_SESSION['gebruiker'])) {
            header('Location: inlog.php');
        }
    }
?>