<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>login formulier</title>
    </head>

    <body>
        <form action="" method="post">
            Email-adres <input type="email" name="email"><br>
            Wachtwoord <input type="password" name="wachtwoord">

            <input type="submit" name="knop">
        </form>

        <?php
            include 'functie.php';
            echo "<br>";

            if (isset($_POST['knop'])) {
                $loggedIn = controleerAccountInput($_POST['email'], $_POST['wachtwoord']);
                if ($loggedIn) {
                    header('Location: account.php');
                }
                else {
                    echo "Sorry, geen toegang!";
                }
            }
        ?>
    </body>
</html>