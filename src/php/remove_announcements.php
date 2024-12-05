<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=cutiesdb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['current_id'];

$stmt = $conn->prepare("DELETE FROM announcements WHERE announcement_id = ?");

if ($stmt->execute([$id])) {
    $data = array(
        'status' => true,
        'msg' => 'Announcement removed successfully!'
    );
} else {
    $data = array(
        'status' => false,
        'msg' => 'Sorry, Announcement not removed.'
    );
}
echo json_encode($data);
