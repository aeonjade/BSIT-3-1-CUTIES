<?php
$servername = "localhost";
$username = "czvqqzbp_cutiesdb";
$password = "NiY28jV%L#[0";
$conn = new PDO("mysql:host=$servername;dbname=czvqqzbp_cutiesdb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'];
$start = $_POST['start'];
$end = $_POST['end'];

$stmt = $conn->prepare("UPDATE tasks SET task_start_date = ?, task_end_date = ? WHERE task_id = ?");

if ($stmt->execute([$start, $end, $id])) {
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
