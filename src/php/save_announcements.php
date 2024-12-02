<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=cutiesdb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$title = $_POST['announcement_title'];
$desc = $_POST['announcement_description'];

$sql = "INSERT INTO announcements (announcement_title, announcement_description)
VALUES ('" . $title . "', '" . $desc . "')
";

if ($conn->exec($sql)) {
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
