<?php

function getTasks()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=$servername;dbname=cutiesdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT task_title, task_start_date, task_end_date, task_time, task_description FROM tasks ORDER BY task_start_date");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}

function getAnnouncements()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=$servername;dbname=cutiesdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT announcement_title, announcement_description FROM announcements");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}

function check_login($con)
{

    if (isset($_SESSION['user_id'])) {

        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: login.php");
    die;
}

function random_num($length)
{

    $text = "";
    if ($length < 5) {
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i = 0; $i < $len; $i++) {
        # code...

        $text .= rand(0, 9);
    }

    return $text;
}
