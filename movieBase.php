<?php

/**
*This program has no sensitive data, So there should be no security breaches.
*This is not a program with long text either, so no size limitations.
*/
function printArray(array $array) {
  echo '<pre>' . print_r($array, true) . '</pre>';
}

/**
* This is the file in going to write the movie information. It will also open
* my Logs.txt file and will append. It will also have a boolean function which
* will tell true or false.
*/
function writeToFile(string $file, string $content) : bool {
  $fp = fopen($file, 'ab');
  if (!$fp) {
    return false;
  }
  if (!fwrite($fp, $content)) {
    return false;
  }
  if (!fclose($fp)) {
    return false;
  }
  return true;
}

?>
