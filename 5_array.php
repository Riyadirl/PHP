<?php

//Creating an Array:
$fruits = array("apple", "banana", "orange");


//Accessing Array Elements:
echo $fruits[1];  // Output: banana


//Associative Arrays:
$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

//Looping through an Array:
foreach ($fruits as $fruit) {
    echo $fruit . " ";   // Output: apple banana orange
}

//Array Length:
$length = count($fruits);
echo $length;  // Output: 3


//Adding Elements to an Array:
$fruits[] = "grape";
array_push($fruits, "melon");


//Removing Elements from an Array:
unset($fruits[1]);


//Checking if an Element Exists in an Array:
if (in_array("banana", $fruits)) {
    echo "Found";
} else {
    echo "Not found";
}

//Sorting an Array:
sort($fruits);


//Combining Arrays:
$vegetables = array("carrot", "broccoli");
$combined = array_merge($fruits, $vegetables);



//Multidimensional Array:

//Two-dimensional Array:
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

//Accessing Elements in a Two-dimensional Array
echo $matrix[0][0];  // Output: 1
echo $matrix[1][2];  // Output: 6


//Associative Multi-dimensional Array:
$students = array(
    array(
        "name" => "John",
        "age" => 20,
        "grades" => array(80, 85, 90)
    ),
    array(
        "name" => "Jane",
        "age" => 22,
        "grades" => array(75, 88, 92)
    )
);

//Accessing Elements in an Associative Multi-dimensional Array:
echo $students[0]["name"];             // Output: John
echo $students[1]["grades"][2];        // Output: 92


//Three-dimensional Array:
$cube = array(
    array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    ),
    array(
        array(10, 11, 12),
        array(13, 14, 15),
        array(16, 17, 18)
    )
);

//Accessing Elements in a Three-dimensional Array:
echo $cube[0][1][2];  // Output: 6
echo $cube[1][2][0];  // Output: 16