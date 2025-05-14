<?php
class Car {
    public $color;


    public function drive(): void {
        echo "The {$this->color} car is driving.";
    }
}

// create object
$car = new Car();
$this->color = "red";
echo $car->drive();

