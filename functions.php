<?php

// funzione controllo mail
function checkAlert($email) {
    return str_contains($email, '.') && str_contains($email, '@');
};
;?>