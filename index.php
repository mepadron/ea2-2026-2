<?php

include_once 'funciones/Autentificacion.php';

$auth = new Autentificacion();

echo "Escriba tu login: ";
$u = trim(fgets(STDIN));

echo "Escriba tu clave: ";
$c = trim(fgets(STDIN));

$usuario = $auth->autenticar($u, $c);//hardcode

if ($usuario) {
    echo "Usuario autenticado\n";
} else {
    echo "Usuario no autenticado\n";
}

