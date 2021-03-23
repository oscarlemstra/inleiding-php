<?php

class Database {
    //u91058p86256_

    private $host = "localhost";
    private $port = "3306";
    private $user = "root";
    private $pass = "";
    private $db = "bakkerij_wim_vlecht";


    public function getTableBrood () {
        $broodLijst = array();

        try {
            $dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->db.';port='.$this->port, $this->user, $this->pass);

            foreach($dbh->query('SELECT * from brood') as $row) {
                $broodLijst[] = $row;
            }
            $dbh = null;
        }
        catch (PDOException $e) {
            print "Error!: ".$e->getMessage()."<br/>";
            die();
        }
        return $broodLijst;
    }


    public function insertIntoTableBrood ($naam, $meel, $gewicht, $img_url) {
        $query = "INSERT INTO brood (naam, meel, gewicht, img_url) VALUES ('$naam', '$meel', $gewicht, '$img_url')";

        try {
            $dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->db.';port='.$this->port, $this->user, $this->pass);
            $dbh->query($query);
        }
        catch (PDOException $e) {
            print "Error!: ".$e->getMessage()."<br/>";
            die();
        }
    }
}