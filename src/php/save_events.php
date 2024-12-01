<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=cutiesdb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$title = $_POST['title'];
$time = $_POST['time'];
$desc = $_POST['desc'];
$startDate = date("y-m-d", strtotime($_POST['startDate']));

$sql = "INSERT INTO tasks (task_title, task_date, task_time, task_description)
VALUES ('" . $title . "', '" . $startDate . "', '" . $time . "', '" . $desc . "')
";

$conn->exec($sql);
