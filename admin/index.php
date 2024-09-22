<?php include 'header.php';?>
<body>
<div id="wrapper">
                <!-- /. NAV TOP  -->
        
    <!-- /. NAV SIDE  -->
            <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br><br>
                <h2>Hotel Booking Login</h2>

                
                <br>
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>
                    </div>
                    <div class="panel-body">
                        
                       <form role="form" method="POST" action="include/login.php">
                            <br>
                            
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" class="form-control" name="email" placeholder="Email " required>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                            </div>
                            <input type="submit" name="login" class="btn btn-primary " value="Login">
                            <hr>

                        </form>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <!-- /. PAGE WRAPPER  -->
</div>
<?php include ('footer.php');?>