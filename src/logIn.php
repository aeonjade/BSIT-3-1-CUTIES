<?php

session_start();

include("connection.php");
include("php/functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//read from database
		$query = "select * from users where user_name = '$user_name' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				$verify = password_verify($password, $user_data['password']);

				if ($verify) {

					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: index.php");
					die;
				}
			}
		}

		echo "<script>alert('Wrong username or password!')</script>";
	} else {
		echo "<script>alert('Wrong username or password!')</script>";
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
			<h3>Login Here Cutie</h3>

			<label for="username">Username</label>
			<input class="input" type="text" placeholder="Email or Phone" id="username" name="user_name" />

			<label for="password">Password</label>
			<input class="input" type="password" placeholder="Password" id="password" name="password" />

			<input id="button" type="submit" value="Log In"></input>
			<p><a data-active="signup" href="signup.php">Create New Account</a></p>
		</form>
	</section>
	</main>
	<?php include "includes/footer.php" ?>

</body>

</html>