<?php
abstract class Shape {
    protected $color;
    
    public function __construct($color="") {
        $this->color = $color;
    }
    
    abstract public function calculateArea();
    
    public function getColor() {
        return $this->color;
    }
}


class Lolo extends Shape{
    

    public function calculateArea() {
        return "";
    }
}