<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=cutiesdb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("SELECT task_title, task_date, task_time FROM tasks");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ);
$count = count($result);
if ($count > 0) {
    $data_arr = array();
    $i = 0;

    foreach ($result as $tasks) {
        $data_arr[$i]['title'] = $tasks->task_title;
        $data_arr[$i]['start'] = date("Y-m-d", strtotime($tasks->task_date));
        $i++;
    }
}

echo json_encode($data_arr);
