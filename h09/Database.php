<?php

class Database {
    //u91058p86256_

    private $host = "localhost";
    private $port = "3306";
    private $user = "u91058p86256_wim";
    private $pass = "roggebrood";
    private $db = "u91058p86256_bakkerijWimVlecht";


    public function getTableBrood () {
        $broodLijst = array();

        try {
            $dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->db.';port='.$this->port, $this->user, $this->pass);

            foreach($dbh->query('SELECT * FROM brood') as $row) {
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



    public function getRecordFromTableBrood ($id) {
        $query = "SELECT * FROM brood WHERE id = $id";
        $record = array();

        try {
            $dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->db.';port='.$this->port, $this->user, $this->pass);
            foreach ($dbh->query($query) as $row) {
                $record = $row;
            }
            $dbh = null;
        }
        catch (PDOException $e) {
            print "Error!: ".$e->getMessage()."<br/>";
            die();
        }
        return $record;
    }



    public function insertIntoTableBrood ($naam, $meel, $gewicht, $img_url) {
        $query = "INSERT INTO brood (naam, meel, gewicht, img_url) VALUES ('$naam', '$meel', $gewicht, '$img_url')";

        try {
            $dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->db.';port='.$this->port, $this->user, $this->pass);
            $dbh->query($query);
            $dbh = null;
        }
        catch (PDOException $e) {
            print "Error!: ".$e->getMessage()."<br/>";
            die();
        }
    }



    public function updateRecordFormTableBrood ($id, $naam, $meel, $gewicht, $img_url) {
        $query = "UPDATE brood
                  SET naam = '$naam', meel = '$meel', gewicht = $gewicht, img_url = '$img_url'
                  WHERE id = $id";

        try {
            $dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->db.';port='.$this->port, $this->user, $this->pass);
            $dbh->query($query);
            $dbh = null;
        }
        catch (PDOException $e) {
            print "Error!: ".$e->getMessage()."<br/>";
            die();
        }
    }



    public function deleteRecordFromTableBrood ($id) {
        $qeury = "DELETE FROM brood WHERE id = $id";

        try {
            $dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->db.';port='.$this->port, $this->user, $this->pass);
            $dbh->query($qeury);
            $dbh = null;
        }
        catch (PDOException $e) {
            print "Error!: ".$e->getMessage()."<br/>";
            die();
        }
    }
}