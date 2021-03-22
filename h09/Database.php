<?php

class Database {
    //u91058p86256_

    private $host = "localhost";
    private $port = "3306";
    private $user = "root";
    private $pass = "";
    private $db = "bakkerij_wim_vlecht";


    public function getTableBrood () {
        try {
            $dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->db.';port='.$this->port, $this->user, $this->pass);

            echo "<pre>";
            foreach($dbh->query('SELECT * from brood') as $row) {
                echo $row['naam'] . '<br>';
            }
            echo "</pre>";

            $dbh = null;
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}