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
  $fp = fopen($fileLog, 'ab');
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

/**
* This is supposed to extract the information using the global $_GET variable.
* Then it will and create a content variable.
*/
$fileLog = "Logs.txt";
extract($_GET);
$content = "$Movie_Name,$Directors_Name,$Artists,$Genre,$inlineRadioOptions\n";

if (writeToFile($fileLog, $content)) {
  $message = <<<EOT
  <div class="alert-danger" role="alert">Failed to write to the file</div>
EOT;
} else {
  $message = <<<EOT
  <div class="alert-danger" role="alert">Success! Information saved.</div>
EOT;
}

?>

<!DOCTYPE html>

<html>

  <head>
    <met charset="utf-8">
    <title>Movie Log</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">
            Movie Logs
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Add Movies</a></li>
          <li><a href="MovieList.php">List Movies</a></li>
        </ul>
      </div>
    </nav>
    <?php echo $message; ?>
  </body>
</html>
