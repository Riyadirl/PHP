<?php


//for Loop:
for ($i = 0; $i < 5; $i++) {
    echo $i . " ";
} // Output: 0 1 2 3 4


//while Loop:
$i = 0;
while ($i < 5) {
    echo $i . " ";
    $i++;
} // Output: 0 1 2 3 4


//do-while Loop:
$i = 0;
do {
    echo $i . " ";
    $i++;
} while ($i < 5); // Output: 0 1 2 3 4


//foreach Loop (for iterating over arrays):
$fruits = array("apple", "banana", "orange");
foreach ($fruits as $fruit) {
    echo $fruit . " ";
} // Output: apple banana orange


//foreach Loop (for iterating over arrays with keys):
$fruits = array("apple", "banana", "orange");
foreach ($fruits as $index => $fruit) {
    echo $index . ": " . $fruit . " ";
} // Output: 0: apple 1: banana 2: orange


//break Statement (to exit a loop):
for ($i = 0; $i < 5; $i++) {
    if ($i == 3) {
        break;
    }
    echo $i . " ";
} // Output: 0 1 2


//continue Statement (to skip the current iteration and continue to the next one):
for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        continue;
    }
    echo $i . " ";
}// Output: 0 1 3 4
