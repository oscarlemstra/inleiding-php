<?php

function upload () {
    if (isset($_POST['knop'])) {
        $fileType = $_FILES['afbeelding']['type'];

        if ($fileType != "image/jpg" && $fileType != "image/jpeg" && $fileType != "image/png") {
            echo "<p id='file-error'>Het bestands type is fout!</p>";
            exit();
        }

        $fileName = $_FILES['afbeelding']['name'];
        $fileLocation = $_FILES['afbeelding']['tmp_name'];
        $fileTargetLocation = "img/".time().$fileName;

        move_uploaded_file($fileLocation, $fileTargetLocation);


        require_once 'Database.php';
        $database = new Database();
        $database->insertIntoTableBrood($_POST['naam'], $_POST['meel'], $_POST['gewicht'], $fileTargetLocation);

        header("Location: index.php");
    }
}



function editUpload () {
    if (isset($_POST['knop'])) {
        $fileType = $_FILES['afbeelding']['type'];

        if ($fileType != "image/jpg" && $fileType != "image/jpeg" && $fileType != "image/png") {
            echo "<p id='file-error'>Het bestands type is fout!</p>";
            exit();
        }

        $fileName = $_FILES['afbeelding']['name'];
        $fileLocation = $_FILES['afbeelding']['tmp_name'];
        $fileTargetLocation = "img/".time().$fileName;

        move_uploaded_file($fileLocation, $fileTargetLocation);

        //verwijderd de oude afbeelding
        unlink($_GET['img_url']);


        require_once 'Database.php';
        $database = new Database();
        $database->updateRecordFormTableBrood($_GET['id'], $_POST['naam'], $_POST['meel'], $_POST['gewicht'], $fileTargetLocation);

        header("Location: index.php");
    }
}


if (isset($_GET['verwijderen'])) {
    require_once 'Database.php';
    $database = new Database();
    $database->deleteRecordFromTableBrood($_GET['id']);

    unlink($_GET['img_url']);

    header("location: index.php");
}