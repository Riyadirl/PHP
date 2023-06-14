<?php

// Including a file using include statement
include 'header.php';

// Get the user input.
$name = $_POST['name'];

// Validate the user input.
if (!validateName($name)) {
    // Display an error message.
    echo 'Invalid name.';
} else {
    // Display a success message.
    echo 'Welcome, ' . $name . '!';
}


// Including a file using include_once statement
include_once 'config.php';

// Requiring a file using require statement
require 'functions.php';

// Requiring a file using require_once statement
require_once 'database.php';

// Include the footer file.
include 'footer.php';


/*The include() statement is used to include the content of another PHP 
file into the current file. The require() statement is similar to the 
include() statement, but it will cause a fatal error if the file to be 
included cannot be found.

In this example, the include() statement is used to include the header.
php file, which contains the HTML code for the header of the website. 
The require() statement is used to include the functions.php file, which
contains the function validateName(). The validateName() function is 
used to validate the user input.

If the user input is valid, the welcome.php file will display a success
 message. Otherwise, it will display an error message */