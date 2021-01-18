<?php
    $accountData = array("piet@worldonline.nl"=>"doetje123", "klaas@carpets.nl"=>"snoepje777",
        "truushendriks@wegweg.nl"=>"arkiearkie201");
    $accountDataLengte = count($accountData);
    $emailTeller = 0;
    $emailIsGevonden = false;


    foreach ($accountData as $email => $wachtwoord) {
        if ($_POST['email'] == $email) {
            $emailIsGevonden = true;
            if ($_POST['wachtwoord'] == $wachtwoord) {
                echo "Welkom.";
                break;
            }
            else {
                echo "Sorry, geen toegang!<br>ga <a href='index.html'>terug</a>.";
            }
        }
        $emailTeller++;
    }

    //als er geen email is gevonden en hij heeft ze allemaal bekenen, doe dit
    if ($emailTeller == $accountDataLengte && $emailIsGevonden == false) {
        echo "Sorry, geen toegang!<br>ga <a href='index.html'>terug</a>.";
    }
?>