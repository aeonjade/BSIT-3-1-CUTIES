<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=cutiesdb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$title = $_POST['title'];

$sql = "DELETE FROM tasks WHERE task_title = '$title'";

if ($conn->exec($sql)) {
    $data = array(
        'status' => true,
        'msg' => 'Event removed successfully!'
    );
} else {
    $data = array(
        'status' => false,
        'msg' => 'Sorry, Event not removed.'
    );
}
echo json_encode($data);