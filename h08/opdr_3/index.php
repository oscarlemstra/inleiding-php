<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
        <title>Garagebedrijf Mr Wheely</title>
    </head>

    <body>
        <div id="center-site">
            <header>
                <img src="auto/header.jpg" alt="header img">
            </header>

            <form action="" method="post">
                <div class="form-group">
                    <label class="titels" for="merken">Merk</label>
                    <select id="merken" name="merk">
                        <option value="alle-auto's" selected>Alle auto's</option>
                        <option value="Skoda">Skoda</option>
                        <option value="Ford">Ford</option>
                        <option value="Opel">Opel</option>
                        <option value="Peugeot">Peugeot</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="titels">Prijs</label> <br>
                    <label for="minimum">Minimum:</label> <input type="text" id="minimum" name="min" size="15">
                    <label for="maximum">Maximum:</label> <input type="text" id="maximum" name="max" size="15">
                </div>

                <input type="submit" name="knop" value="Toepassen">
            </form>

            <div id="auto-lijst">
                <?php
                    include_once 'Auto.php';
                    include_once 'AutoOverzicht.php';
                    include_once 'autoLijst.php';


                    $autoOverzicht = new AutoOverzicht();

                    //maakt objecten van de auto lijst
                    foreach (getAutoLijst() as $row) {
                        foreach ($row as $value) {
                            $data[] = $value;
                            $dataMax = count($row);

                            if (count($data) == $dataMax) {
                                $auto = new Auto($data[0], $data[1], $data[2], $data[3]);
                                $autoOverzicht->voegAutoToe($auto);
                                $data = [];
                            }
                        }
                    }

                    //zet de auto's op de pagina
                    if (isset($_POST['knop'])) {
                        foreach ($autoOverzicht->getGefilterdeLijst($_POST['merk'], $_POST['min'], $_POST['max']) as $auto) {
                            echo "<div class='auto'>";
                            echo "<img src='".$auto->getUrl()."' alt='auto'>";
                            echo "<p>Merk: ".$auto->getMerk()."</p>";
                            echo "<p>Type: ".$auto->getType()."</p>";
                            echo "<p>Prijs: € ".$auto->getPrijs()."</p>";
                            echo "</div>";
                        }
                    }
                    else {
                        foreach ($autoOverzicht->getAutoLijst() as $auto) {
                            echo "<div class='auto'>";
                            echo "<img src='".$auto->getUrl()."' alt='auto'>";
                            echo "<p>Merk: ".$auto->getMerk()."</p>";
                            echo "<p>Type: ".$auto->getType()."</p>";
                            echo "<p>Prijs: € ".$auto->getPrijs()."</p>";
                            echo "</div>";
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>