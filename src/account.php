<?php
session_start();
include "php/functions.php";
include("connection.php");
$user_data = check_login($con);

$user_name = $user_data['user_name'];
$student_number = $user_data['student_number'];
$user_id = $user_data['id']; // Get the user's ID from session or user data

// Prepare the SQL query to fetch the logged-in user's image
$query = "SELECT filename FROM users WHERE id = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("i", $user_id); // Bind the logged-in user's ID to the query
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Use a default image if no filename is found
$profilePicture = !empty($row['filename']) ? "uploads/" . $row['filename'] : "https://via.placeholder.com/100";
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
        <img id="profilePicture" src="<?php echo htmlspecialchars($profilePicture); ?>" alt="Profile Picture"><!--Default profile pic-->

        <form class="upload-pictures" action="upload.php" method="post" enctype="multipart/form-data">
          <input id="image" type="file" name="image" id="">
          <input id="submit" type="submit" value="Upload" name="submit">
        </form>
      </div>

      <div class="info">
        <div>
          <label for="full-name">User Name:</label>
          <input type="text" id="full-name" value="<?php echo htmlspecialchars($user_name); ?>" readonly>
        </div>
        <div>
          <label for="course-section">Student Number</label>
          <input type="text" id="course-section" value="<?php echo htmlspecialchars($student_number); ?>" readonly>
        </div>
      </div>

      <div class="actions">
        <button class="logout-btn"><a data-active="logout" href="logout.php">Log Out</a></button>
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