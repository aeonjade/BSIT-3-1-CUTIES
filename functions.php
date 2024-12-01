<?php

function check_login($con)
{
  if (isset($_SESSION['user_id'])) {

    $id = $_SESSION['user_id']; 
    $query = "select * from users where user_id = '$id' limit 1";

    $result = mysqli_query($con, $query);
    if ($result && mysqli_num_rows($result) > 0) {
      $user_data = mysqli_fetch_assoc($result);
      return $user_data;
    }else {
      echo '<script>alert("Query failed or no rows found.")</script>';
    }
  } else {
    echo '<script>alert("Session user_id not set.")</script>';
  }

  //redirect to login
	//header("Location: login.php");
	//die;
  return null;
}
