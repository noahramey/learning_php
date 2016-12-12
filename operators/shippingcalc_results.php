<?php
    $weight = $_GET["weight"];
    $distance = $_GET["distance"];
    $cost = ($weight / 20) + ($distance / 20);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Shipping Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Shipping Cost: $<?php echo $cost; ?></h1>
      <h3>Weight: <?php echo $weight; ?> lbs</h3>
      <h3>Distance: <?php echo $distance; ?> miles</h3>
    </div>
  </body>
</html>
