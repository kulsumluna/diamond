<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Create a new MySQLi instance
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
