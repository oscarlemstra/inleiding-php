<!DOCTYPE html>
<html>
    <head>
        <title>opdracht 2</title>

        <style>
            body {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <?php
        for ($i = 0; $i < 20; $i++) {
            for ($t = 0; $t < $i; $t++) {
                echo " *";
            }
            echo " *<br>";
        }

        //stam
        for ($i = 0; $i < 4; $i++) {
            echo "****<br>";
        }
        ?>
    </body>
</html>