<?php
    $recipient = "Ed";
    $downtown_address = "208 SW 5th Ave #105, Portland, OR 97204";
    $northwest_address = "1978 19th Ave, Portland, OR 97209";
    $south_address = "1493 SW 2nd Ave, Portland, OR 97201";
    $east_address = "9019 SW 15th Ave, Portland, OR 97219";
    $downtown_order = "Milk and Cream";
    $northwest_order = "Cream";
    $south_order = "Milk";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Order Form</title>
    <link rel="stylesheet" href="coffee_styles.css">
  </head>
  <body>
    <p>Hi <?php echo $recipient; ?>, </p>
    <p>Just making my weekly order. Details are below.</p>
    <p><?php echo $downtown_order; ?></p>
    <p><?php echo $downtown_address; ?></p>
    <p><?php echo $northwest_order; ?></p>
    <p><?php echo $northwest_address; ?></p>
    <p><?php echo $south_order; ?></p>
    <p><?php echo $south_address; ?></p>
    <p>Thanks,</p>
    <p>Diane</p>
  </body>
</html>
