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
                <label for="naam">Naam van brood:</label>
                <input type="text" id="naam" name="naam" required>

                <label for="meel">Meel type:</label>
                <input type="text" id="meel" name="meel" required>

                <label for="gewicht">Gewicht in gram:</label>
                <input type="number" id="gewicht" name="gewicht" required>

                <label for="afbeelding">Afbeelding van brood:</label>
                <input type="file" id="afbeelding" name="afbeelding" required>

                <input type="submit" id="knop" name="knop" value="Toevoegen">

                <!-- regelt de upload van de afbeelding en de ander gegevens -->
                <?php require_once 'upload.php'?>
            </form>
        </div>
    </body>
</html>