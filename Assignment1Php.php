<?php
//links the movieBase file
require("movieBase.php");

/**
* This is supposed to extract the information using the global $_GET variable.
* Then it will and create a content variable.
*/
$file = "Logs.txt";
extract($_GET);

/**
*This will strip and remove any extra space from input
*It uses an if statement to require 3 contents in order to writeToFile
*/
if (!empty($movie_name) && !empty($directors_name) && !empty($inlineRadioOptions)) {
  $movie_name = trim($movie_name);
  $directors_name = trim($directors_name);
  $artists = trim($artists);
  $genre = trim($genre);
  $inlineRadioOptions = trim($inlineRadioOptions);
  $content = "$movie_name,$directors_name,$artists,$genre,$inlineRadioOptions\n";

  if (!writeToFile($file, $content)) {
    $message = <<<EOT
    <div class="alert alert-danger" role="alert">Failed to write to the file.</div>
EOT;
  } else {
    $message = <<<EOT
    <div class="alert alert-success" role="alert">Success! Information saved.</div>
EOT;
 }
} else {
  $message = <<<EOT
  <div class="alert alert-danger" role="alert">ERROR! Movie name, Directors name, and rating are required!</div>
EOT;
}

?>

<!DOCTYPE html>

<html>

  <?php require("movieHead.php"); ?>

  <body>
    <?php require("movieNav.php"); ?>

    <div class="container">
      <div class="row">
        <?php echo $message; ?>
      </div>
    </div>
  </body>
</html>
