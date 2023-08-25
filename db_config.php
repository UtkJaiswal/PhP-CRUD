<?php
$host = "localhost";
$username = "root";
$password = "root";
$database = "student_db";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "<pre>";
// print_r($conn);



?>
