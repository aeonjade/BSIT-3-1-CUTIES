<?php

function getTasks()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=$servername;dbname=cutiesdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT task_title, task_start_date, task_time, task_description FROM tasks ORDER BY task_start_date");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}

function getAnnouncements(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=$servername;dbname=cutiesdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT announcement_title, announcement_description FROM announcements");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}