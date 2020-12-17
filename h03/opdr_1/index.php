<?php
   //niks
?>

<!DOCTYPE html>
<html>
    <head>
        <title>opdracht 1</title>
    </head>

    <body>
        <?php
            //mieren
            echo "<h2>for-loop</h2>";

            for ($i = 1; $i <= 10; $i++) {
                echo "<img src='../../img/mieren/mier".$i.".jpg' width='18%'>";
            }

            //insecten
            echo "<br> <h2>foreach-loop</h2>";

            $insecten = array("bijen.jpg", "kruis_spin.jpg", "lieveheersbeestje.jpg");

            foreach ($insecten as $insect) {
                echo "<img src='../../img/".$insect."' width='18%'>";
            }
        ?>
    </body>
</html>
