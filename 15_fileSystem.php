<?php

//file system p1
//$quotes = readfile('fileSystem.txt');
//echo $quotes;


$file = 'fileSystem.txt';
if (file_exists($file)) {
    //read file
    echo readfile($file);
} else {
    echo 'file does not exits';
}




$filename = 'path/to/file.txt';

// File Existence Checking
if (file_exists($filename)) {
    echo "File exists!" . PHP_EOL;
} else {
    echo "File does not exist!" . PHP_EOL;
}

// File Reading using file_get_contents()
$content = file_get_contents($filename);
echo "File Contents using file_get_contents(): " . PHP_EOL;
echo $content . PHP_EOL;

// File Reading using fopen() and fgets()
$file = fopen($filename, 'r');
echo "File Contents using fopen() and fgets(): " . PHP_EOL;
while (!feof($file)) {
    echo fgets($file);
}
fclose($file);

// File Writing using file_put_contents()
$newContent = "New content to be written to the file.";
file_put_contents($filename, $newContent);
echo "File has been written with new content." . PHP_EOL;

// File Appending using file_put_contents()
$additionalContent = "Additional content to be appended.";
file_put_contents($filename, $additionalContent, FILE_APPEND);
echo "File has been appended with additional content." . PHP_EOL;

// File Deletion
unlink($filename);
echo "File has been deleted." . PHP_EOL;
