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

            <form action="" method="post">
                <label for="naam">Naam van brood:</label>
                <input type="text" id="naam" name="naam" required>

                <label for="meel-type">Meel type:</label>
                <input type="text" id="meel-type" name="meel-type" required>

                <label for="gewicht">Gewicht in gram:</label>
                <input type="number" id="gewicht" name="gewicht" required>

                <label for="vorm">Vorm van brood:</label>
                <input type="text" id="vorm" name="vorm" required>

                <input type="submit" id="knop" value="Toevoegen">
            </form>
        </div>
    </body>
</html>