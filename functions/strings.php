<?php
    $uppercase = $_GET["uppercase"];
    $word_count = $_GET["word_count"];
    $word_shuffle = $_GET["word_shuffle"];
    $position = $_GET["position"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Strings</title>
  </head>
  <body>
    <h1>All strings</h1>

    <p><?php echo strtoupper($uppercase); ?></p>
    <p><?php echo str_word_count($word_count); ?></p>
    <p><?php echo str_shuffle($word_shuffle); ?></p>
    <p><?php echo stripos($position, "you"); ?></p>
  </body>
</html>
