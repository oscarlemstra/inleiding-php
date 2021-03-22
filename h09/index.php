<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
        <title>Bakkerij Wim Vlecht</title>
    </head>

    <body>
        <header>
            <h1>Bakkerij Vlecht Beheer</h1>
        </header>

        <div id="center-site">
            <div id="intro">
                <div id="buttons">
                    <a class="button" href="index.php">Broodjes overzicht</a>
                    <a class="button" href="form.php">Broodje toevoegen</a>
                </div>

                <h2>Broodjes overzicht</h2>
                <p>Informatie van de verschillende broodjes</p>
            </div>

            <div id="brood-overzicht">
                <?php
                    include_once 'Database.php';

                    $database = new Database();
                    $database->getTableBrood();
                ?>
            </div>
        </div>
    </body>
</html>