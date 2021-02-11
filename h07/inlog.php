<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>login sessies</title>
    </head>

    <body>
        <form action="" method="post">
            Gebruiker <input type="text" name="gebruiker"><br>
            Wachtwoord <input type="password" name="wachtwoord">

            <input type="submit" name="knop" value="inloggen">
        </form>

        <?php
            include 'check_login.php';

            if (isset($_GET['loguit'])) {
                $_SESSION = array();
                session_destroy();
                header('location: inlog.php');
            }

            if (isset($_SESSION['gebruiker'])) {
                header('Location: user_page.php');
            }

            if (isset($_POST['knop'])) {
                $loggedIn = controleerAccountInput($_POST['gebruiker'], $_POST['wachtwoord']);
                if ($loggedIn) {
                    header('Location: user_page.php');
                }
                else {
                    echo "<br>"."Gebruikersnaam of wachtwoord is fout!";
                }
            }
        ?>
    </body>
</html>