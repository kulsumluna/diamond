<?php include('header.php')?>

<?php
// Include the database connection file
include("include/db_connection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['title'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO rooms (title, category, price) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $category, $price);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: allroom.php");
        exit();
    } else {
        echo "Error inserting record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
?>
<body>
    <div id="wrapper">
        <?php include('nav.php');?>
		
		
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
           
              <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add Room</h2>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Room
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-md-12">
                                    
                                    <?php
// Include the database connection file
include("include/db_connection.php");

// Check if the room ID is provided
if(isset($_GET['id'])) {
    // Get the room ID from the URL parameter
    $roomId = $_GET['id'];

    // Retrieve the room data from the database
    $stmt = $conn->prepare("SELECT * FROM rooms WHERE id = ?");
    $stmt->bind_param("i", $roomId);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the room exists
    if($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Display the room details in the edit form
        ?>
        <form role="form" method="post" action="update.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label>Room Title</label>
                <input class="form-control" name="title" value="<?php echo $row['title']; ?>">
            </div>
            <div class="form-group">
                <label>Room Category</label>
                <input class="form-control" name="category" value="<?php echo $row['category']; ?>">
            </div>
            <div class="form-group">
                <label>Room Price</label>
                <input class="form-control" name="price" value="<?php echo $row['price']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <?php
    } else {
        // Room does not exist
        echo "Room not found.";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>





                            </div>
                        </div>
                    </div>
                    <!-- End Form Elements -->
                </div>
            </div>
            <!-- /. ROW  -->

            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
                         
        </div>
     
    </div>
    <?php include('footer.php');?>
