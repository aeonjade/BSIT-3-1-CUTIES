<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=czvqqzbp_cutiesdb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
$time = $_POST['time'];
$desc = filter_var($_POST['desc'], FILTER_SANITIZE_SPECIAL_CHARS);
$startDate = date("y-m-d", strtotime($_POST['startDate']));
$endDate = date("y-m-d", strtotime($_POST['endDate']));

$stmt = $conn->prepare("INSERT INTO tasks (task_title, task_start_date, task_end_date, task_time, task_description)
VALUES (?, ?, ?, ?, ?)
");

if ($stmt->execute([$title, $startDate, $endDate, $time, $desc])) {
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
