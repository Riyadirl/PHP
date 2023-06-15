<?php 
$isTrue = true;
$value = $isTrue ? 'Yes' : 'No';
echo $value; // Output: Yes

echo "\n"; // Print a new line for clarity

$userType = 'admin';
$message = ($userType === 'admin') ? 'Welcome, Administrator!' : 'Welcome, User!';
echo $message; // Output: Welcome, Administrator!

echo "\n"; // Print a new line for clarity

$score = 75;
$result = ($score >= 60) ? 'Pass' : (($score >= 40) ? 'Retake' : 'Fail');
echo $result; // Output: Pass