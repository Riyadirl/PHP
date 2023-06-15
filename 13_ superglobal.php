<?php

// $_SERVER
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "\n";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "\n";

// $_GET
$userId = $_GET['id'];
echo "User ID: " . $userId . "\n";

// $_POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    echo "Posted Name: " . $name . "\n";
}

// $_SESSION
session_start();
$_SESSION['username'] = 'JohnDoe';
echo "Session Username: " . $_SESSION['username'] . "\n";

// $_COOKIE
setcookie('language', 'English', time() + 3600);
echo "Cookie Language: " . $_COOKIE['language'] . "\n";

// $_FILES
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['file'];
    echo "Uploaded File Name: " . $file['name'] . "\n";
}

// $_ENV
$environment = $_ENV['ENVIRONMENT'];
echo "Environment: " . $environment . "\n";

// $GLOBALS
$globalVariable = 'Hello, Global!';
function testFunction()
{
    echo "Global Variable: " . $GLOBALS['globalVariable'] . "\n";
}
testFunction();


/*
In this code, we have examples of various superglobal variables:

$_SERVER contains information about the server and the current request.
$_GET retrieves values from query parameters in the URL.
$_POST retrieves values from an HTTP POST request.
$_SESSION allows storing and accessing session data.
$_COOKIE contains values stored in cookies.
$_FILES provides information about uploaded files.
$_ENV retrieves values from environment variables.
$GLOBALS allows accessing global variables from within functions.
*/