<?php
require 'database.php';

// Process the login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform a database query
    $sql = "SELECT * FROM user WHERE email = '$username' AND pass = '$password'";
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


<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f1f1f1;
    }

    .container {
      width: 300px;
      margin: 0 auto;
      margin-top: 100px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      border: none;
      color: #fff;
      cursor: pointer;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login Form</h2>
   
   <form action="index.php" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
    </form>
	
  </div>
</body>
</html>
