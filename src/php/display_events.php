<?php
$servername = "localhost";
$username = "czvqqzbp_cutiesdb";
$password = "NiY28jV%L#[0";
$conn = new PDO("mysql:host=$servername;dbname=czvqqzbp_cutiesdb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("SELECT task_id, task_title, task_start_date, task_end_date, task_time FROM tasks");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ);
$count = count($result);
if ($count > 0) {
    $data_arr = array();
    $i = 0;

    foreach ($result as $tasks) {
        $data_arr[$i]['id'] = $tasks->task_id;
        $data_arr[$i]['title'] = $tasks->task_title . " - " . date("g:i A", strtotime($tasks->task_time));
        $data_arr[$i]['start'] = date("Y-m-d", strtotime($tasks->task_start_date));
        $data_arr[$i]['end'] = date("Y-m-d", strtotime($tasks->task_end_date));
        $i++;
    }
}

echo json_encode($data_arr);
