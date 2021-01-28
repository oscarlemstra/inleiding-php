<?php
    $host = "localhost";
    $port = "3306";
    $user = "schooluser";
    $pass = "school";
    $db = "school2";
    $query = "SELECT * from cursist";


    echo "<style>
        table, th, td {
            border: solid black 1px;
        }
        
        th, td {
            padding: 5px;
        }
    </style>";


    //tabel
    echo "<table>";
    $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port, $user, $pass);
    $valueDuplicate = "";

    //zet de namen van de kollomen in de tabel
    foreach ($dbh->query($query) as $row) {
        echo "<tr>";
        foreach ($row as $item => $value) {
            if ($item === "".$item."") {
                echo "<th>";
                echo $item;
                echo "</th>";
            }
        }
        echo "<tr>";
        break;
    }

    //zet alle waardes in de tabel
    foreach ($dbh->query($query) as $row) {
        echo "<tr>";
        foreach ($row as $item => $value) {
            if ($valueDuplicate != $value) {
                echo "<td>";
                echo $value;
                echo "</td>";
                $valueDuplicate = $value;
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>