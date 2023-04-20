<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
	
    <title>Property On Rent</title> 
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    

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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
	

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="realestate_version">

    <!-- LOADER -->
    <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == "en"){?>
                    <a class="navbar-brand" href="index.php"><h2 style="text-shadow: 5px 5px 5px #CCCCCC;font-family: 'Castoro', serif;">Property on Rent</h2></a> <?php } else{ ?>
					
                <a class="navbar-brand" href="index.php"><h2 style="text-shadow: 5px 5px 5px #CCCCCC;font-family: 'Castoro', serif;">Nieruchomość do wynajęcia</h2></a>
					<?php  } ?>
 Select Language : <select name='lang' onchange='changeLang(this.value);'>
    <option value='pl' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'pl'){ echo "selected"; } ?>>Polish</option>
   <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?>>English</option>
  
  </select>

<script>
 function changeLang(lang){
 $.ajax({
            url:"lang.php",    //the page containing php script
            type: "post",    //request type,
            //dataType: 'json',
            data: {lang: lang},
            success:function(result){
               //window.location.reload();
			  // alert(result);
			  window.location.href='index.php';
            }
        });
    }
 
 </script>



			   </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <?php //echo $_SESSION['lang'];
						
						if(isset($_SESSION['lang']) && $_SESSION['lang'] == "en"){
						 ?>
							
							 <li><a class="active" href="index.php">Home</a></li>
                                <!---li><a href="about.php">About us </a></li---->
                                <li><a href="service.php">Resources</a></li>
								 <li><a href="admin/index.php">Admin Login</a></li>
							
						<?php 	
						
						}
						
						else{ ?>
							
                        
                        <li><a class="active" href="index.php">Dom</a></li>
                        <!---li><a href="about.php">O nas</a></li--->
                        <li><a href="service.php">Zasoby</a></li>
                        <li><a href="admin/index.php">Logowanie administratora</a></li>
                    <?php 
                }
						
						
							
                    ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
   <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

</body>
</html>