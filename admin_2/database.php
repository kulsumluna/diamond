<?php
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'hotel';

// Create a database connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful
// echo "Connected to the database successfully!";

// Close the database connection
// $conn->close();
?>
