<?php
class LoginModel{

    public $loginBD = "mp";
    public $claveBD = "1234";
    
    public function validUser($l, $c){

        echo $l;
        echo $c;


        if($l == $this->loginBD && $c == $this->claveBD){
            return true;
        }else{
            return false;
        }

    }
    
    
}




