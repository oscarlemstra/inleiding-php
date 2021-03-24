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
                    require_once 'Database.php';
                    require_once 'Overzicht.php';
                    require_once 'Brood.php';

                    $database = new Database();
                    $overzicht = new Overzicht();


                    //bakt de broodjes en zet ze in de overzicht
                    foreach ($database->getTableBrood() as $row) {
                        $broodje = new Brood($row['id'], $row['naam'], $row['meel'], $row['gewicht'], $row['img_url']);
                        $overzicht->voegBroodjeToe($broodje);
                    }

                    //maakt html elementen van overzicht
                    foreach ($overzicht->getOverzicht() as $broodje) {
                        echo "<div class='broodje'>";
                        echo "<img src='".$broodje->getImg_url()."' alt='brood'>";
                        echo "<p>Naam: ".$broodje->getNaam()."</p>";
                        echo "<p>Meel: ".$broodje->getMeel()."</p>";
                        echo "<p>Gewicht: ".$broodje->getGewicht()." g</p>";
                        echo "<a href='edit_form.php?id=".$broodje->getId()."'><img class='edit' src='img/edit_icon.png' alt='edit'></a>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>