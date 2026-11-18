<?php
class Animal {
    public $name;
    private $cedula;
    
    public function __construct($name="") {
        $this->name = $name;
    }
    
    public function speak() {
        return "$this->name makes a sound";
    }
}

class Dog extends Animal {
    public function fetch() {
        return "$this->name fetches the ball";
    }
}

$dog = new Animal();
$dog->name="Principe". "\n";
echo $dog->name;

$dog->cedula="122555". "\n";
echo $dog->cedula;
//echo $dog->speak() . "\n";
//echo $dog->fetch(). "\n";