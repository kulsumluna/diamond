<?php include('header.php')?>

<?php

include("include/db_connection.php");

?>
<body>
    <div id="wrapper">
        <?php include('nav.php');?>
		
		
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
           
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>All Room</h2>
                        <a style="float:right" href="addroom.php" class="btn btn-primary square-btn-adjust">Add Room</a>
                        <div class="row">

                        </div>
                    </div>


                    <hr>


                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                All Room
                            </div>
                            <div class="panel-body">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Room Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include the database connection file
                include("include/db_connection.php");

                // Prepare the SQL statement to fetch room data
                $stmt = $conn->prepare("SELECT * FROM rooms");
                $stmt->execute();
                $result = $stmt->get_result();

                // Loop through the rows and populate the table
                while ($row = $result->fetch_assoc()) {
					?>
				<tr>
                    <td> <?php echo $row['title'];?> </td>
                    <td> <?php echo $row['category'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td>
					<a href="roomedit.php?id=<?php echo $row['id'];?>"" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
					<a href="roomdelete.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i> Delete</a>
					
					</td>
                </tr>
               <?php }
                ?>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>

                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>

            </div>
                         
        </div>
     
    </div>
    <?php include('footer.php');?>
