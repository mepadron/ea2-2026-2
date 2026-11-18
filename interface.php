<?php
interface Printable {
    public function print();
}

class Lolo implements Printable{
        
    public function print(){
            echo "se pinta de color";
    }

}