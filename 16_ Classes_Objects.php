<?php
// Define a class
class Car {
    // Properties
    public $brand;
    public $model;
    public $color;

    // Constructor
    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    // Method
    public function drive() {
        echo "The {$this->brand} {$this->model} is driving." . PHP_EOL;
    }
}

// Create objects
$car1 = new Car("Toyota", "Corolla", "Blue");
$car2 = new Car("Honda", "Civic", "Red");

// Access object properties
echo "Car 1: {$car1->brand} {$car1->model}, Color: {$car1->color}" . PHP_EOL;
echo "Car 2: {$car2->brand} {$car2->model}, Color: {$car2->color}" . PHP_EOL;

// Call object methods
$car1->drive();
$car2->drive();