<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Tenant Tale</title>  
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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="realestate_version">
<?php 
    include'header.php';
?>	

<!--     <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div> -->
	<div class="about-box">
		<div class="container">
		<?php if($_SESSION['lang'] == "en"){ ?>
			<div class="row">
				<div class="top-feature owl-carousel owl-theme">
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="uploads/icon-01.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Full Furnished</a></h4>
							<p>Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi. </p>
						</div> 
					</div>
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="uploads/icon-02.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Living Inside a Nature</a></h4>
							<p>Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi.</p>
						</div> 
					</div>
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="uploads/icon-03.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Luxurious Fittings</a></h4>
							<p>Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi. </p>
						</div> 
					</div>
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="uploads/icon-04.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Non Stop Security</a></h4>
							<p>Lorem Is a dummy Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi. </p>
						</div> 
					</div>
				</div>
			</div>
		<?php } else{ ?> 
		<div class="row">
				<div class="top-feature owl-carousel owl-theme">
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="uploads/icon-01.png" class="img-responsive" alt=""></div>
							<h4><a href="#">W pełni umeblowane</a></h4>
							<p>Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi. </p>
						</div> 
					</div>
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="uploads/icon-02.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Życie w naturze</a></h4>
							<p>Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi.</p>
						</div> 
					</div>
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="uploads/icon-03.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Luksusowe okucia</a></h4>
							<p>Mauris eu porta orci. In at erat enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi. </p>
						</div> 
					</div>
					<div class="item">
						<div class="single-feature">
							<div class="icon"><img src="uploads/icon-04.png" class="img-responsive" alt=""></div>
							<h4><a href="#">Bezpieczeństwo non-stop</a></h4>
							<p>Lorem jest manekinem Mauris eu porta orci. W erze enim. Suspendisse felis erat, volutpat at nisl sit amet, maximus molestie nisi. </p>
						</div> 
					</div>
				</div>
			</div>
		
		<?php } ?>
			<hr class="hr1">
			<?php if($_SESSION['lang'] == "en"){ ?>
			<div class="row">
				<div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="uploads/about_bg.jpg" alt="" class="img-responsive">                        
                    </div><!-- end media -->
                </div>
				<div class="col-md-6">
					<div class="message-box right-ab">
                        <h4>Awards Winning Real Estate Company</h4>
                        <h2>Welcome to Tenant Tale</h2>
                        <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
						<p>Aenean eleifend in felis id viverra. Vestibulum semper ex eu molestie pulvinar. Maecenas non efficitur metus, et semper sem. Mauris ligula sapien, gravida a scelerisque ut, vehicula sed mauris. Proin dapibus mi id vulputate euismod. Nam ullamcorper dui tellus, non lacinia lorem hendrerit eu. Donec at orci cursus, rutrum metus eget, cursus turpis.  </p>
                    </div>
				</div>
			</div>
			<?php } else{ ?> 
			
			<div class="row">
				<div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="uploads/about_bg.jpg" alt="" class="img-responsive">                        
                    </div><!-- end media -->
                </div>
				<div class="col-md-6">
					<div class="message-box right-ab">
                        <h4>Nagradzana firma z branży nieruchomości</h4>
                        <h2>Witamy w Tenant Tale</h2>
                        <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
						<p>Aenean eleifend in felis id viverra. Vestibulum semper ex eu molestie pulvinar. Maecenas non efficitur metus, et semper sem. Mauris ligula sapien, gravida a scelerisque ut, vehicula sed mauris. Proin dapibus mi id vulputate euismod. Nam ullamcorper dui tellus, non lacinia lorem hendrerit eu. Donec at orci cursus, rutrum metus eget, cursus turpis.  </p>
                    </div>
				</div>
			</div>
			
			<?php } ?>
			
		</div>
	</div>
  <?php
  include('footer.php')
	  ?>
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    
</body>
</html>