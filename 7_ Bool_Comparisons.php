<?php


// Assigning Boolean Values
$isTrue = true;
$isFalse = false;

// Comparisons
$x = 5;
$y = 10;


// Equal to
echo ($x == $y);  // Output: false


// Not equal to
echo ($x != $y);  // Output: true


// Identical
echo ($x === $y); // Output: false


// Not Identical
echo ($x !== $y); // Output: true


// Greater than
echo ($x > $y);   // Output: false


// Less than
echo ($x < $y);   // Output: true


// Greater than or equal to
echo ($x >= $y);  // Output: false


// Less than or equal to
echo ($x <= $y);  // Output: true


// Logical Operators
$x = 5;
$y = 10;


// AND
echo ($x < 10 && $y > 5);  // Output: true


// OR
echo ($x < 10 || $y < 5);  // Output: true


// NOT
echo !($x == 5);           // Output: false
