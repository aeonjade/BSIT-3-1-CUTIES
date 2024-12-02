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
$endDate = date("y-m-d", strtotime($_POST['endDate']));

$sql = "INSERT INTO tasks (task_title, task_start_date, task_end_date, task_time, task_description)
VALUES ('" . $title . "', '" . $startDate . "', '" . $endDate . "', '" . $time . "', '" . $desc . "')
";

if ($conn->exec($sql)) {
    $data = array(
        'status' => true,
        'msg' => 'Event added successfully!'
    );
} else {
    $data = array(
        'status' => false,
        'msg' => 'Sorry, Event not added.'
    );
}
echo json_encode($data);