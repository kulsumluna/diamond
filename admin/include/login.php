<?php
// Include the database connection file
include("db_connection.php");

// Retrieve login form data
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare the SQL statement
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

// Get the result set
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $storedPassword = $row['password'];

    // Verify the password
    if ($password === $storedPassword) {
        // Password is correct, redirect to the dashboard page or perform necessary actions
        header("Location: ../dashboard.php");
        exit();
    } else {
        // Password is incorrect
        echo "Invalid password";
    }
} else {
    // User does not exist
    echo "Invalid email";
}

// Close the database connection
$stmt->close();
$conn->close();
?>
