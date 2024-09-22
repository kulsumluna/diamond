<?php
// Include the database connection file
include("include/db_connection.php");

// Check if the room ID is provided
if(isset($_GET['id'])) {
    // Get the room ID from the URL parameter
    $roomId = $_GET['id'];

    // Prepare the SQL statement to delete the room
    $stmt = $conn->prepare("DELETE FROM rooms WHERE id = ?");
    $stmt->bind_param("i", $roomId);

    // Execute the statement
    if($stmt->execute()) {
        // Room deleted successfully
        header("Location: allroom.php");
        exit();
    } else {
        // Error deleting room
        echo "Error deleting room: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
