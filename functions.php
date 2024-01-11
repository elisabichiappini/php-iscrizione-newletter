<?php
session_start();

$_SESSION["email"] = $mailInput ;

function checkAlert($mailInput) {
                
    if ((strpos($mailInput, '@') !== false && strpos($mailInput, '.' ) !== false )) {
        echo "Mail valida";
        return true;
    } else {
        echo "La mail inserita non è corretta, controlla @ e il .";
        return false;
    }
}

session_unset();
;?>