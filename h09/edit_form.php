<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
        <title>Brood formulier</title>
    </head>

    <body>
        <header>
            <h1>Bakkerij Vlecht Beheer</h1>
        </header>

        <div id="center-site">
            <div id="buttons">
                <a class="button" href="index.php">Broodjes overzicht</a>
                <a class="button" href="form.php">Broodje toevoegen</a>
            </div>

            <form action="" method="post" enctype="multipart/form-data">
                <?php
                    require_once 'Database.php';
                    $database = new Database();
                    $record = $database->getRecordFromTableBrood($_GET['id']);

                    $naam = $record['naam'];
                    $meel = $record['meel'];
                    $gewicht = $record['gewicht'];
                    $_GET['img_url'] = $record['img_url'];


                    echo "<h3>Verander brood infomatie</h3>";

                    echo "<label for='naam'>Naam van brood:</label>";
                    echo "<input type='text' id='naam' name='naam' value='".$naam."' required>";

                    echo "<label for='meel'>Meel type:</label>";
                    echo "<input type='text' id='meel' name='meel' value='".$meel."' required>";

                    echo "<label for='gewicht'>Gewicht in gram:</label>";
                    echo "<input type='number' id='gewicht' name='gewicht' value='".$gewicht."' required>";

                    echo "<label for='afbeelding'>Afbeelding van brood:</label>";
                    echo "<input type='file' id='afbeelding' name='afbeelding' required>";

                    echo "<input type='submit' id='knop' name='knop' value='Toepassen'>";
                    echo "<a id='verwijder-knop' href='upload.php?id=".$_GET['id']."&img_url=".$_GET['img_url']."&verwijderen=true'>Verwijderen</a>"
                ?>

                <!-- regelt de upload van de afbeelding en de andere gegevens -->
                <?php require_once 'upload.php'; editUpload(); ?>
            </form>
        </div>
    </body>
</html>