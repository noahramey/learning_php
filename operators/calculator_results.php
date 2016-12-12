<?php
    $first_number = $_GET["first_number"];
    $second_number = $_GET["second_number"];
    $solution = $first_number + $second_number;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Your answer below</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Arithmetic in PHP is easy!</h1>
      <p>The sum of <?php echo $first_number; ?> and <?php echo $second_number; ?> is: </p>
      <p><?php echo $solution; ?></p>
    </div>
  </body>
</html>
