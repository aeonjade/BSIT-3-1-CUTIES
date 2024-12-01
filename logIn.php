<?php
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
  //something was posted
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(!empty($username) && !empty($password) && !is_numeric($username)){

    //read to database
    $query = "select * from users where username = '$username' limit 1";
  
    $result = mysqli_query($con, $query);

    if($result){
      if($result && mysqli_num_rows($result) > 0){
        $user_data = mysqli_fetch_assoc($result);
        
        if($user_data['password'] === $password){
          $_SESSION['user_id'] = $super_data['user_id'];
          header("Location: index.php");
          die;
        }
      }
      echo '<script>alert("wrong username or password!")</script>';
    }else{
      echo '<script>alert"wrong username or password!"</script>';
    }
  }
}
?> 
 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shorthand icon" href="images/VITS LOGO.png" />
  <title>Login - VITS</title>
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
      <h3>Login Here Cutie</h3>

      <label for="username">Username</label>
      <input class="input" type="text" placeholder="name" id="username" name="username" />

      <label for="password">Password</label>
      <input class="input" type="password" placeholder="Password" id="password" name="password" />

      <input id="button" type="submit" value="Log In">
      <!--<button type="submit" value="Log In">Log In</button>-->
    </form>
  </section>
  </main>
  <?php include "includes/footer.php" ?>
</body>

</html>