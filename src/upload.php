<?php 
session_start();
include "php/functions.php";
include("connection.php"); 

$user_data = check_login($con);

if (isset($_POST["submit"])) {
    $fileName = $_FILES["image"]["name"];
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpg", "jpeg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "uploads/".$fileName;
    if(in_array($ext, $allowedTypes)){
        if(move_uploaded_file($tempName, $targetPath)){
            $query = "INSERT INTO users (filename) VALUES ('$fileName')";
            if(mysqli_query($con, $query)){
                header("Location: index.php");
            }else{
                echo "Something is wrong";
            }
        }else{
            echo "File is not uploaded";
        }
    }else{
        echo "Your files are not allowed";
    }
}