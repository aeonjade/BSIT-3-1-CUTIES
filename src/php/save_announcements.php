<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=cutiesdb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$title = filter_var($_POST['announcement_title'], FILTER_SANITIZE_SPECIAL_CHARS);
$desc = filter_var($_POST['announcement_description'], FILTER_SANITIZE_SPECIAL_CHARS);

$stmt = $conn->prepare("INSERT INTO announcements (announcement_title, announcement_description)
VALUES (?, ?)");

if ($stmt->execute([$title, $desc])) {
    $data = array(
        'status' => true,
        'msg' => 'Announcement added successfully!'
    );
} else {
    $data = array(
        'status' => false,
        'msg' => 'Sorry, Announcement not added.'
    );
}
echo json_encode($data);
