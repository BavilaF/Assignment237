<?php
/**
*This program has no sensitive data, So there should be no security breaches.
*This is not a program with long text either, so no size limitations.
*/

function printArray(array $array) {
  echo '<pre>' . print_r($array, true) . '</pre>';
}
printArray($_GET);
/*
$file = 'Logs.txt';

$fp = fopen($file, 'ab');

extract($_GET);
/**
* This is supposed to write user input to a file
*/
/*function writeToFile(string $file, string $content) : boolean {
  fwrite($fp, "$Movie_Name,$Directors_Name,$Artists,$Genre,$inlineRadioOptions");
}
fclose($fp);

/**
* This is suppoed to read from a file (the user movie input)
*/
/*function readFromFile(string $file) : string {
// Your code here
}


?>
