    <?php 
    require 'config.php';
    session_start();
    // Queries
    

    

?>


<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>tenant tale</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
            <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
.myButton {
    box-shadow: 0px 1px 0px 0px #3e7327;
    background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
    background-color:#77b55a;
    border-radius:6px;
    border:1px solid #4b8f29;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:15px;
    font-weight:bold;
    padding:10px 100px;
    text-decoration:none;
    text-shadow:0px -1px 0px #5b8a3c;
    float: left;
}
.myButton:hover {
    background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
    background-color:#72b352;
}
.myButton:active {
    position:relative;
    top:1px;
}

        
.book {
    box-shadow: 0px 1px 0px 0px #f0f7fa;
    background:linear-gradient(to bottom, #33bdef 5%, #019ad2 100%);
    background-color:#33bdef;
    border-radius:6px;
    border:1px solid #057fd0;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:15px;
    font-weight:bold;
    padding:10px 70px;
    text-decoration:none;
    text-shadow:0px -1px 0px #5b6178;
    float: left;
}
.book:hover {
    background:linear-gradient(to bottom, #019ad2 5%, #33bdef 100%);
    background-color:#019ad2;
}
.book:active {
    position:relative;
    top:1px;
}


</style>
</head>
<body class="realestate_version">
<?php  
    include 'header.php';
?>	
	<div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
		</div>
	</div>
	
	<div class="about-box">
		<div class="container">
			<?php if($_SESSION['lang'] == "en"){  ?>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-sm-12">
					<div class="single-services">
						<div class="single-services-img">
							<img src="uploads/icon-01.png" class="img-responsive" alt="">
						</div>
						
						
								   
                          <a href="view_resorces.php?type=Tenament"   class="btn btn-light btn-radius grd1 btn-brd" >Tenaments</a>
							
		
                          <!-- The Modal -->
                        
                    </div>
				</div>
				<div class="col-md-4 col-sm-4 col-sm-12">
                    <div class="single-services">
						<div class="single-services-img">
							<img src="uploads/icon-02.png" class="img-responsive" alt="">
						</div>
						
						<a href="view_resorces.php?type=Bunglows"   class="btn btn-light btn-radius grd1 btn-brd" >Bunglows</a>
						
                        </div>
                </div>
				<div class="col-md-4 col-sm-4 col-sm-12">
					<div class="single-services">
						<div class="single-services-img">
							<img src="uploads/icon-03.png" class="img-responsive" alt="">
						</div>
						
				        <a href="view_resorces.php?type=Flat"   class="btn btn-light btn-radius grd1 btn-brd" >Flat</a>
	         
                     </div>
				</div>
			</div>
			<?php } else { ?>
							
				<div class="row">
				<div class="col-md-4 col-sm-4 col-sm-12">
					<div class="single-services">
						<div class="single-services-img">
							<img src="uploads/icon-01.png" class="img-responsive" alt="">
						</div>
						
						
								   
                          <a href="view_resorces.php?type=kamienica"   class="btn btn-light btn-radius grd1 btn-brd" >kamienica</a>
							
		
                          <!-- The Modal -->
                        
                    </div>
				</div>
				<div class="col-md-4 col-sm-4 col-sm-12">
                    <div class="single-services">
						<div class="single-services-img">
							<img src="uploads/icon-02.png" class="img-responsive" alt="">
						</div>
						
						<a href="view_resorces.php?type=Domki letniskowe"   class="btn btn-light btn-radius grd1 btn-brd" >Domki letniskowe</a>
						
                        </div>
                </div>
				<div class="col-md-4 col-sm-4 col-sm-12">
					<div class="single-services">
						<div class="single-services-img">
							<img src="uploads/icon-03.png" class="img-responsive" alt="">
						</div>
						
				        <a href="view_resorces.php?type=plo"   class="btn btn-light btn-radius grd1 btn-brd" >Płaski</a>
	         
                     </div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div><br><br><br>

    <script type="text/javascript">
        $('.datepicker').datepicker({ 

         startDate: new Date()

        });
    </script>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>
	
    <?php 
        include'footer.php';
    ?>
</body>
</html>