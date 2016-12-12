<?php
    $repeat_text = $_GET["repeat_text"];
    $repeat_number = $_GET["repeat_number"];
    $repeated_text = str_repeat($repeat_text, $repeat_number);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>String repeating</title>
  </head>
  <body>
    <h1>Here ya go!</h1>
    <p><?php echo $repeated_text; ?></p>
  </body>
</html>
