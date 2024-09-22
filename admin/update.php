<?php
// Include the database connection file
include("include/db_connection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the room ID and updated data from the form
    $roomId = $_POST['id'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    // Prepare the SQL statement to update the room
    $stmt = $conn->prepare("UPDATE rooms SET title = ?, category = ?, price = ? WHERE id = ?");
    $stmt->bind_param("ssdi", $title, $category, $price, $roomId);

    // Execute the statement
    if ($stmt->execute()) {
        // Room updated successfully
        header("Location: allroom.php");
        exit();
    } else {
        // Error updating room
        echo "Error updating room: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
