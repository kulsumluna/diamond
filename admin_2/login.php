<?php
// Process the login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform a database query
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Login successful
        echo "Login successful!";
        // Perform additional actions or redirect to a different page
    } else {
        // Login failed
        echo "Invalid username or password.";
    }
}
?>