<?php

$stringOne = " my email address";
$stringTwo = "riyad.info1@gmail.com";
//echo $stringOne . $stringTwo;

$name = 'mahbub';
echo ' hey my name is ' . $name;
echo "hey my name is $name"; // use "

//strlen() - Return the Length of a String
echo strlen("Hello world!"); // outputs 12

//str_word_count() - Count Words in a String
echo str_word_count("Hello world!"); // outputs 2

//strrev() - Reverse a String
echo strrev("Hello world!"); // outputs !dlrow olleH

//strpos() - Search For a Text Within a String
echo strpos("Hello world!", "world"); // outputs 6

//str_replace() - Replace Text Within a String
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!