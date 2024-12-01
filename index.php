<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con); 
?>

<!DOCTYPE html> 
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>BSIT 3-1 | CUTIES</title>
  <link rel="shorthand icon" href="images/VITS LOGO.png" />

</head>

<body>

  <?php include "includes/nav.php" ?>

  <section id="society">
    <div class="text-box">
      <h1>Hello there CUTIEpie <?php 
        if (!empty($user_data)) {
            echo $user_data['username'];
        } else {
            echo "Guest";
        }
      ?></h1> 
      <p>The one of the best Academic organization at Pamatasan ng Lungsod ng Valenzuela</p>
      <a class="hero-btn" data-active="gallery" href="gallery.php">Visit our Gallery</a>
    </div>
  </section>

  <?php include "includes/footer.php" ?>

</body>
</html>