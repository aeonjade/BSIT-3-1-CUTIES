<?php
session_start();

include("connection.php");
include("./php/functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //something was posted
  $user_name = $_POST['user_name'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $student_number = $_POST['student_number'];

  if (!empty($user_name) && !empty($password) && !empty($student_number) && !is_numeric($user_name)) {

    //save to database
    $user_id = random_num(20);
    $query = "insert into users (user_id,user_name,password,student_number) values ('$user_id','$user_name','$password','$student_number')";

    mysqli_query($con, $query);

    header("Location: login.php");
    die;
  } else {
    echo "Please enter some valid information!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shorthand icon" href="images/VITS LOGO.png" />
  <title>Signup - VITS</title>
  <link rel="stylesheet" href="css/login.css" />
  <link rel="stylesheet" href="css/style.css" />

</head>


<body>
  <?php include "includes/nav.php" ?>

  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <section class="vh-100" id="logIn-header">
    <div class="background">
      <div class="shape"></div>
      <div class="shape"></div>
    </div>

    <form method="post">
      <h3>Signup Here Cutie</h3>

      <label for="username">Username</label>
      <input class="input" type="text" placeholder="Email or Phone" id="username" name="user_name" />

      <label for="student_number">Student Number</label>
      <input class="input" type="text" placeholder="Student Number" id="studentnumber" name="student_number" />

      <label for="password">Password</label>
      <input class="input" type="password" placeholder="Password" id="password" name="password" />

      <input id="button" type="submit" value="Sign Up"></input>
      <p><a data-active="logIn" href="login.php">Already have an account?</a></p>
    </form>
  </section>
  </main>
  <?php include "includes/footer.php" ?>
</body>

</html>