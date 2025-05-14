<?php

// Define iterfance 
interface Animal{
    public function makeSound();
    public function move();
}

// class implemented and must have those method
class Dog implements Animal {
    public function makeSound(): void {
        echo "Bark\n";
    }

    public function move(): void {
        echo "The dogs run\n";
    }
}


class Bird implements Animal {
    public function makeSound(): void {
        echo "Chirp\n";
    }

    public function move(): void {
        echo "The bird fly\n";
    }
}

// create object for dog
$dog = new Dog;
$dog->makeSound();
$dog->move();

// create object for bird
$bird = new Bird;
$bird->makeSound();
$bird->move();



