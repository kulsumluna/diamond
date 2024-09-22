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
                                    
                                    <form role="form" method="post" action="#" enctype="multipart/form-data">
    <div class="form-group">
        <label>Room Title</label>
        <input class="form-control" name="title" placeholder="Room Title">
    </div>
    <div class="form-group">
        <label>Room Category</label>
        <input class="form-control" name="category" placeholder="Room Category">
    </div>
    <div class="form-group">
        <label>Room Price</label>
        <input class="form-control" name="price" placeholder="Room Price">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
                                    <br>




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
