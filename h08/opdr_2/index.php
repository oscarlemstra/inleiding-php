<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="stylesheet.css">
        <title>Monkey Business</title>
    </head>

    <body>
        <div id="center-site">
            <header>
                <img src="../../img/monkey-business.jpg" alt="logo">
                <h1>select your monkey!</h1>
                <img src="../../img/monkey_swings.png" alt="hangende aap">
            </header>

            <div id="apen-lijst">
                <?php
                    include_once 'aapoverzicht_opdracht_1.php';
                    include_once 'Aap.php';

                    foreach ($apen as $aapNaam) {
                        $aap = new Aap();
                        $aap->setNaam($aapNaam);
                        $aap->setUrl($aapNaam);

                        echo "<a href='".$aap->getUrl()."'>";
                        echo $aap->getNaam();
                        echo "</a>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>