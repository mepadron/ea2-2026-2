<?php
class Animal {
    public function speak() {
        return "Some sound";
    }
}

class Dog extends Animal {
    public function speak() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function speak() {
        return "Meow!";
    }
}

function makeAnimalSpeak(Animal $animal) {
    return $animal->speak();
}

echo makeAnimalSpeak(new Dog()) . "\n";
echo makeAnimalSpeak(new Cat());