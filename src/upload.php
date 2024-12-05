<?php
session_start();
include "php/functions.php";
include("connection.php");

// Check if the user is logged in
$user_data = check_login($con);
$user_id = $user_data['id']; // Retrieve the logged-in user's ID

if (isset($_POST["submit"])) {
    $fileName = $_FILES["image"]["name"];
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpg", "jpeg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "uploads/" . $fileName;

    // Check if the file type is allowed
    if (in_array($ext, $allowedTypes)) {
        // Move the uploaded file to the 'uploads' directory
        if (move_uploaded_file($tempName, $targetPath)) {
            // Update the filename for the logged-in user
            $query = "UPDATE users SET filename = ? WHERE id = ?";
            $stmt = $con->prepare($query); // Use prepared statement for security
            $stmt->bind_param("si", $fileName, $user_id); // Bind the filename and user ID

            if ($stmt->execute()) {
                header("Location: account.php"); // Redirect to the account page
                exit();
            } else {
                echo "Error updating database: " . $stmt->error;
            }
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
} else {
    echo "No file submitted.";
}
?>
