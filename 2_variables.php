<?php

//String:
$name = "John";

//Integer:
$age = 30;

//Float (Floating-point number):
$price = 3.99;

//Boolean
$isStudent = true;

//Array
$fruits = array("apple", "banana", "orange");

//Object:
class Person
{
    public $name;
    public $age;
}
$person = new Person();
$person->name = "John";
$person->age = 30;


//Null:
$x = null;

//Resource (a special variable holding a reference to an external resource):
$file = fopen("example.txt", "r");


//Callable (a variable that can be used as a function):
$func = function ($x, $y) {
    return $x + $y;
};

//Closure (anonymous functions that can capture variables from their surrounding scope):
$greeting = "Hello";
$sayHello = function ($name) use ($greeting) {
    echo $greeting . " " . $name;
};
$sayHello("John");  // Output: Hello John