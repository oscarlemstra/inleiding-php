<?php
    function controleerAccountInput ($inputEmail, $inputWachtwoord) {
        $accountData = array("piet@worldonline.nl"=>"doetje123", "klaas@carpets.nl"=>"snoepje777",
            "truushendriks@wegweg.nl"=>"arkiearkie201");


        foreach ($accountData as $email => $wachtwoord) {
            if ($inputEmail == $email && $inputWachtwoord == $wachtwoord) {
                return true;
            }
        }
        return false;
    }
?>