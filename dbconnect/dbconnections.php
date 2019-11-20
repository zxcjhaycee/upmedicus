<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicusdb";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);
?>
