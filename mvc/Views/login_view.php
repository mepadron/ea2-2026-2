<?php
include("Controllers/login_controller.php");


//Instanciamos el controlador
$loginController = new LoginController();

//Llamamos al metodo index
$loginController->index('mp', '1234');
echo "<br />";
echo "Hola soy la vista login php";



