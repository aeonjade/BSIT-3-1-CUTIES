<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=cutiesdb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'];
$start = $_POST['start'];
$end = $_POST['end'];

$sql = " UPDATE tasks SET task_start_date = '$start', task_end_date = '$end' WHERE task_id = '$id'";

if ($conn->exec($sql)) {
    $data = array(
        'status' => true,
        'msg' => 'Event updated successfully!'
    );
} else {
    $data = array(
        'status' => false,
        'msg' => 'Sorry, Event not added.'
    );
}
echo json_encode($data);
