    <?php 
    require 'config.php';
    session_start();
    // Queries
	
	
	$type = $_GET['type'];
	
  
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
			<div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3><?php echo $type;?></h3>
				</div><!-- end col -->
            </div><!-- end title -->
			
			<div class="row">
			<?php  if($_SESSION['lang'] == "en"){
			$Select_sql_Tenament ="SELECT * FROM resources WHERE R_name='$type'";
			$data = mysqli_query($conn, $Select_sql_Tenament);
			$result = mysqli_num_rows($data);
	
	
                    $Tenament = $conn->query($Select_sql_Tenament);
                        if ($Select_sql_Tenament) {
                        while ($row = $Tenament->fetch_assoc()) {
							
							
							$r_id = $row['id'];
							$r_img = $row['R_image'];
                            $r_occupant = $row['R_occupant'];
                            $r_price = $row['R_price'];
                            $r_name = $row['R_name'];
							$pname = $row['pname'];
							
                            $r_address = $row['R_address'];
							$total=$r_occupant*$r_price;
						
						?>
				<div class="col-md-4 col-sm-4 col-sm-12">
				
					<div class="single-services">
						<div class="single-services-img">
							<img src="<?php echo "admin/".$r_img.""; ?>" class="img-responsive" alt="" style="height:300px;">
						</div>
						<div class="single-services-desc">
							<h4><a href="#"><?php echo $r_name ?></a></h4>
							<h4><?php echo $pname ?></h4>
							<b>Price:-<?php echo $r_price ?></b>/-</br>
							<b>Occupant:-<?php echo $r_occupant ?></b> Members</br>
							<p><b>Address:-</b><?php echo $r_address ?></P>
							<!--<b>Total Price:-<?php echo $total ?></b>-->
							
						
							<a class="btn btn-light btn-radius grd1 btn-brd" data-toggle="modal" data-target="#enquiry<?php echo $r_id ?>" >Enquiry</a>
							 <div class="modal" id="enquiry<?php echo $r_id ?>" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h2 class="h4 text-center">Enquiry</h2>
                </div>
                <div class="modal-body">
                <form action="enquiry.php" method="post">
                              
                                <div class="status"></div>
                                <div class="row">
                                    <div class="col-sm-6">
									
									<input type="text" name="id" hidden value = "<?php echo $r_id ?>" >
                                        <div class="form-group"> <input type="text" name="name" placeholder="Your Name"
                                                class="form-control" > </div>
												</div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group"> <input type="tel" name="tel" placeholder="Telephone"
                                                class="form-control" > </div>
                                    </div>
									</div>
                                
                                <div class="form-group"> <input type="email" name="email" placeholder="E-mail Address"
                                        class="form-control"> </div>
                                
                               <button type="submit" class="btn btn-primary" name = "submit">Send Request</button>
                            </form>
							</div>
                </div>
               
              </div>
            </div>
		</div>
						
						
					
                    </div>
				</div>
			<?php } }  }
			else
			{
			
			
						 
			$Select_sql_Tenament ="SELECT * FROM resources WHERE R_name_pl='$type'";
			$data = mysqli_query($conn, $Select_sql_Tenament);
			$result = mysqli_num_rows($data);
			
	
						$Tenament = $conn->query($Select_sql_Tenament);
                        if ($Select_sql_Tenament) {
                        while ($row = $Tenament->fetch_assoc()) {
							
							
							$r_id = $row['id'];
							$r_img = $row['R_image'];
                            $r_occupant = $row['R_occupant'];
                            $r_price = $row['R_price'];
                            $r_name = $row['R_name_pl'];
							$pname1 = $row['pname_pl'];
                            $r_address = $row['R_address_pl'];
							$total=$r_occupant*$r_price;
						
						?>
						
						
				<div class="col-md-4 col-sm-4 col-sm-12">
				
					<div class="single-services">
						<div class="single-services-img">
							<img src="<?php echo "admin/".$r_img.""; ?>" class="img-responsive" alt="" style="height:300px;">
						</div>
						<div class="single-services-desc">
							<h4><a href="#"><?php echo $r_name ?></a></h4>
							<h4><?php echo $pname1 ?></a></h4>
							<b>Cena:-<?php echo $r_price ?></b>/-</br>
							<b>Mieszkaniec:-<?php echo $r_occupant ?></b>Członkowie</br>
							<p><b>Adres zamieszkania:-</b><?php echo $r_address ?></P>
							<!--<b>Total Price:-<?php echo $total ?></b>-->
						
							
						</div>
						
						<a class="btn btn-light btn-radius grd1 btn-brd" data-toggle="modal" data-target="#enquiry<?php echo $r_id ?>" >Książka</a>
						 <div class="modal" id="enquiry<?php echo $r_id ?>" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h2 class="h4 text-center">Zapytanie</h2>
                </div>
                <div class="modal-body">
                <form action="enquiry.php" method="post">
                              
                                <div class="status"></div>
                                <div class="row">
                                    <div class="col-sm-6">
									<input type="text" name="id" hidden value = "<?php echo $r_id ?>" > 
                                        <div class="form-group"> <input type="text" name="name" placeholder="Twoje imię"
                                                class="form-control" required> </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group"> <input type="tel" name="tel" placeholder="Telefon"
                                                class="form-control" > </div>
                                    </div>
                                </div>
                                <div class="form-group"> <input type="email" name="email" placeholder="Adres e-mail"
                                        class="form-control" required> </div>
                                
                               <button type="submit" class="btn btn-primary" name = "submit">Wysłać prośbę</button>
                            </form>
                </div>
               
              </div>
            </div>
          </div>
						
						
                         

                    </div>
				</div>
						<?php }}} ?>
			</div>
			
			
		</div>
	</div>

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