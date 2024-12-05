<?php
$servername = "localhost";
$username = "czvqqzbp_cutiesdb";
$password = "NiY28jV%L#[0";
$conn = new PDO("mysql:host=$servername;dbname=czvqqzbp_cutiesdb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM tasks WHERE task_id = ?");

if ($stmt->execute([$id])) {
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