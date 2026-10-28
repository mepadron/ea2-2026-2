<?php


function autenticar(string $usuario, string $password) : bool {
    // echo "$usuario", "$password";
    // exit();
    $valid_password = '1234';
    if ($usuario === 'admin' && $password === $valid_password) {
        return true;
    } else {
        return false;
    }
}