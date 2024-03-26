<?php

$servername = 'localhost';
$username = 'root';
$db_password = '';
$dbname = 'tech_hub';

$conn = new mysqli($servername, $username, $db_password, $dbname);


if($conn->connect_error) die("Connection failed: " . $conn->connect_error);


return $conn;