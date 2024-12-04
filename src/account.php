<?php
session_start();
include "php/functions.php";
include("connection.php");
$user_data = check_login($con);

$user_name = $user_data['user_name'];
$password = $user_data['password'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shorthand icon" href="images/VITS LOGO.png" />
  <title>Login - VITS</title>
  <link rel="stylesheet" href="css/account.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <?php include "includes/navFunction.php" ?>

  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <section class="vh-100" id="logIn-header">
    <div class="background">
      <div class="shape"></div>
      <div class="shape"></div>
    </div>

    <div class="container">
    <h3>Account Settings</h3> 
    
    <div class="profile">
      <img id="profilePicture" src="https://via.placeholder.com/100" alt="Profile Picture">
      <button onclick="document.getElementById('fileInput').click()">Change Profile Picture</button>
      <input type="file" id="fileInput" accept="image/*" onchange="updateProfilePicture(event)">
    </div>
    
    <div class="info">
      <div>
        <label for="full-name">User Name:</label>
        <input type="text" id="full-name" value="<?php echo htmlspecialchars($user_name); ?>" readonly>
      </div>
      <div>
        <label for="course-section">Student Number</label>
        <input type="text" id="course-section" value="22-1621" readonly>
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" value="<?php echo htmlspecialchars($password); ?>" readonly>
      </div>
    </div>
    
    <div class="actions">
      <button class="edit-btn">Edit Password</button>
      <button class="logout-btn">Log Out</button>
    </div>
  </div>

  </section>
  </main>
  <?php include "includes/footer.php" ?>

  
  <script>
    function updateProfilePicture(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('profilePicture').src = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    }
  </script>
</body>

</html>