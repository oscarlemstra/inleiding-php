<!DOCTYPE html>
<html>
    <head>
        <title>mier hier</title>

        <style>
            body {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <?php
            $greenOrRed = true;

            for ($i = 1; $i <= 9; $i++) {
                //bepaald de kleur
                if ($greenOrRed === true) {
                    $color = "style='border: solid limegreen 5px'";
                }
                else {
                    $color = "style='border: solid red 5px'";
                }

                //maakt een plaatje
                echo "<img src='../../img/mieren/mier".$i.".jpg' width='18%' ".$color.">";

                //veranderd de kleur
                if ($greenOrRed === true) {
                    $greenOrRed = false;
                }
                else {
                    $greenOrRed = true;
                }
            }
        ?>
    </body>
</html>