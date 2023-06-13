<?php

// Regular function
function sayHello($name)
{
    echo "Hello, " . $name . "!";
}

// Function with return value
function calculateSum($x, $y)
{
    return $x + $y;
}

// Function with default parameter value
function greet($name = "Guest")
{
    echo "Welcome, " . $name . "!";
}

// Recursive function
function factorial($n)
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Anonymous function (closure)
$addNumbers = function ($x, $y) {
    return $x + $y;
};

// Calling regular function
sayHello("John");       // Output: Hello, John!


// Calling function with return value
$result = calculateSum(5, 10);
echo $result;           // Output: 15


// Calling function with default parameter value
greet();                // Output: Welcome, Guest!
greet("Alice");         // Output: Welcome, Alice!


// Calling recursive function
$factorial = factorial(5);
echo $factorial;        // Output: 120


// Calling anonymous function (closure)
$sum = $addNumbers(3, 7);
echo $sum;              // Output: 10
