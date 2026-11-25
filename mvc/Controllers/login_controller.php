<?php
require_once 'Models/login_model.php';


class LoginController {



    public function index($l, $c){
        echo "Hola desde el controlador {$l} y {$c}";
        $loginModel = new LoginModel();
       $resp = $loginModel->validUser($l, $c);
       echo "<br />";
       echo $resp;
    }
    

}   
