<?php
    session_start();
    require 'config.php';
      
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="icon" type="image/icon" href="assets/img/favicon.ico">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <!-- /. NAV TOP  -->
         <?php
		include('navbar.php');
		?>
        <!-- /. SIDEBAR MENU (navbar-side) -->

        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Change Password</h1>
                    </div>
                </div>
				  <form method="POST" action="changepass_process.php" enctype="multipart/form-data">
                     
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Admin Detail
                        </div>
						
                        <div class="panel-body">
                         
						  <div class="form-group">
                            <label for="exampleInputEmail1">Old Password</label>
                            <input type="text" name="opwd" class="form-control" id="pname" required="TRUE" />
                          </div> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">New Password</label>
                            <input type="text" name="npwd" class="form-control" id="pname" required="TRUE" />
                          </div> 
						
                       
                        </div>
                        </div>
                    </div>
					
					
					 
					 
					
                </div>
				<div class="btn-group">
				<input type="submit" name="submit" value="submit" class="btn btn-success btn-lg" />
                          
                        </div>  
                        </form>
						
            </div>
        </div>
    </div>
    <footer >
        <!-- copy; 2019 Enlighten Infosystems | By : <a href="http://www.enlighteninfosystems.com/" target="_blank">Admin Design</a> -->
    </footer>
    <!-- /. FOOTER  -->
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
