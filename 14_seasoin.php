<?php

// Starting a session
session_start();

// Setting session variables
$_SESSION['username'] = 'JohnDoe';
$_SESSION['role'] = 'Admin';

// Displaying session variables
echo "Username: " . $_SESSION['username'] . "\n";
echo "Role: " . $_SESSION['role'] . "\n";

// Modifying session variables
$_SESSION['role'] = 'User';

// Unsetting a session variable
unset($_SESSION['username']);

// Checking if a session variable is set
if (isset($_SESSION['role'])) {
    echo "Role is set.\n";
} else {
    echo "Role is not set.\n";
}

// Destroying a session
session_destroy();

// Checking if a session is active
if (session_status() === PHP_SESSION_ACTIVE) {
    echo "Session is active.\n";
} else {
    echo "Session is not active.\n";
}


/*
Starting a session: We begin the session using session_start(). This function enables the use of session variables.

Setting session variables: We assign values to session variables $_SESSION['username'] and $_SESSION['role'].

Displaying session variables: We output the values of session variables using echo.

Modifying session variables: We update the value of the $_SESSION['role'] variable.

Unsetting a session variable: We remove the $_SESSION['username'] variable using unset().

Checking if a session variable is set: We use isset() to determine if $_SESSION['role'] is set and output the appropriate message.

Destroying a session: We destroy the session and clear all session data using session_destroy().

Checking if a session is active: We use session_status() to check if the session is active and output the corresponding message.
*/