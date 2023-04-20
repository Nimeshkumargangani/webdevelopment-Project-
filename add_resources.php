<?php
    session_start();
    require 'config.php';
      
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PG2ME</title>
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
                        <h1 class="page-head-line">Add Resources</h1>
                    </div>
                </div>
				  <form method="POST" action="add_resources_process.php" enctype="multipart/form-data">
                     
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Resource Detail
                        </div>
						
                        <div class="panel-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Property Type</label>
							<select type="select" class="form-control" name="name" id="exampleInputName1" placeholder="Select name" required="TRUE">
							<option>Tenament</option>
							<option>Bunglows</option>
							<option>Flat</option>
							<select>
                            
                          </div>
						  <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="pname" class="form-control" id="pname" required="TRUE" />
                          </div> 
                          <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="₹ 1,000" required="TRUE" />
                          </div>                          
                        <div class="form-group">
                            <label for="Occupants">No of Occupants</label>
                            <select name="occupants" class="form-control" required="TRUE">
                                <option value="">Select No. of Occupants</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5 </option>
                            </select> 
                        </div>
						<div class="form-group">
                            <label for="resource_address">Address</label>
                            <textarea type="text" rows="5" name="address" class="form-control" id="address" required="TRUE"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="resource_image">Image</label>
                            <input type="file" id="image" name="fileToUpload" class="form-control" id="fileToUpload" required="TRUE"/>
                        </div>
                       
                        </div>
                        </div>
                    </div>
					
					
					 <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Szczegóły zasobu
                        </div>
                        <div class="panel-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Typ nieruchomości</label>
							<select type="select" class="form-control" name="name1" id="exampleInputName1" placeholder="Select name" required="TRUE">
							<option>kamienica</option>
							<option>Domki letniskowe</option>
							<option value="plo">płaski</option>
							<select>
                            
                          </div>
						  <div class="form-group">
                            <label for="exampleInputEmail1">Nazwa</label>
                            <input type="text" name="pname1" class="form-control" id="pname1" required="TRUE" />
                          </div> 
                          
						<div class="form-group">
                            <label for="resource_address">Adres zamieszkania</label>
                            <textarea type="text" rows="5" name="address1" class="form-control" id="address" required="TRUE"></textarea>
                        </div>
                       
                       
                        </div>
                        </div>
                    </div>
					 
					
                </div>
				<div class="btn-group">
                          <button type="submit" class="btn btn-success btn-lg">Submit</button>
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
