<?php
    //u91058p86256_

    function controleerAccountInput ($inputEmail, $inputWachtwoord) {
        $host = "localhost";
        $port = "3306";
        $user = "u91058p86256_schooluser";
        $pass = "school";
        $db = "u91058p86256_school2";
        $query = "SELECT * from account WHERE email_adres = '".$inputEmail."'";

        $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port, $user, $pass);


        foreach ($dbh->query($query) as $row) {
            if ($row['email_adres'] == $inputEmail && $row['wachtwoord'] == $inputWachtwoord) {
                return true;
            }
        }
        return false;
    }
?>