<?php

include_once 'funciones/Autentificacion.php';

echo "Escriba tu login: ";
$u = trim(fgets(STDIN));

echo "Escriba tu clave: ";
$c = trim(fgets(STDIN));

$usuario = autenticar($u, $c);//hardcode

if ($usuario) {
    echo "Usuario autenticado";
} else {
    echo "Usuario no autenticado";
}

