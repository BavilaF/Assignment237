<?php
/**
* This gets the file and all the contents of fileLog showing  all the input
*in a new page.
*/

$fileLog = "Logs.txt"

$list = file_get_contents($fileLog);

echo $list;

?>
