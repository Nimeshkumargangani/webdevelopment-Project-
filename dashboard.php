<?php
    session_start();
    require 'config.php';
    // Queries
    $select_users_sql = "SELECT * FROM resources";
    $select_booked_resources_sql = "SELECT * FROM enquiry";
    
   

 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RHS Admin</title>
    <link rel="icon" type="image/icon" href="assets/img/favicon.ico">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
      <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
			<?php
		include('navbar.php');
		?>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                    </div>
                </div>
                <div class="row">
            <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-one">
                    <?php 
                        $result_user = mysqli_query($conn,$select_users_sql);
                        if($result_user){
                            $row = mysqli_num_rows($result_user);
                            if($row){
                                $users = $row;
                            }
                        }
                    ?>
                            <a href="viewenquiry.php">
                                <span><i class="fa fa-users" aria-hidden="true"></i></span>
                                 <h5>Total Number of Resources</h5>
								
								 <h3>
								 <?php  
								 if($row>0)
								 {
									 echo $users = $row; 
								 }
								 else
								 {
									 echo "0";
								 }
								 ?>
								 </h3>
								
                            </a>
                        </div>
                        </div>
              <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-two">
                    <?php 
                        $result_booked = mysqli_query($conn,$select_booked_resources_sql);
                        if($result_booked){
                            $row = mysqli_num_rows($result_booked);
                            
                        }
                    ?> <a href="booking.php">
                                <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                 <h5>Total Number of Enquiry</h5>
								 <h3>
								 <?php  
								 if($row>0)
								 {
									 echo $booked = $row; 
								 }
								 else
								 {
									 echo "0";
								 }
								 ?>
								 </h3>
                       </a>
                        </div>
                        </div>
            
                                     
                        </div>
<!--                  

               <div class="row">
           
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
	
        </div>
		<footer >
        <!-- copy; 2019 Enlighten Infosystems | By : <a href="http://www.enlighteninfosystems.com/" target="_blank">Admin Design</a> -->
    </footer>
    <!-- /. WRAPPER  -->

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
