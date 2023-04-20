<?php
    session_start();
    require 'config.php';
       
    
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/icon" href="assets/img/favicon.ico">

    <title>PG2ME-Admin</title>
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
                        <h1 class="page-head-line">Resources</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-8">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Resources List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
										
                                            <th>Property Type</th>
											<th>Name</th>
                                            <th>Price</th>
                                            <th>No. Occupants</th>
											<th>Address</th>
											<th hidden>Address1</th>
											<th>Image</th>
											
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    // Query
                                    $select_sql_resource = "SELECT * FROM resources";
                                    $result = $conn->query($select_sql_resource);
                                    if($result->num_rows>0){
										$id =1;
                                        while($row = $result->fetch_assoc()){
											

                                            $name = $row["R_name"];
											$pname = $row["pname"];
											
                                            $price = $row["R_price"];
                                            $occupants = $row["R_occupant"];
                                            $image = $row["R_image"];
											$address = $row["R_address"];
											$address1 = $row["R_address_pl"];
											
                                         ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $name; ?></td>
											<td><?php echo $pname; ?></td>
                                            <td><?php echo $price; ?></td>
                                            <td><?php echo $occupants; ?></td>
											<td><?php echo $address; ?></td>
											<td hidden><?php echo $address1; ?></td>
											
											
                                            <td><img src="<?php echo $image; ?>" alt="room photos" style="height:50px;width: 50px;"></td>
											
											
											
                                            <form action="resource_delete.php" method="POST">
                                                 <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                                                <td><a class="btn btn-danger" href='edit_resource.php?<?php echo"res_id=$row[id]"; ?>'>Edit</a></td>
                                            </form>
                                        </tr>
                                           <?php
										   $id++;
                                        }
                                    }
                                    ?>
                                    
                                    </tbody>
                                </table>    
                             
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
               
            </div>
                
              

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
	 <footer>
        <!-- copy; 2019 Enlighten Infosystems | By : <a href="http://www.enlighteninfosystems.com/" target="_blank">Admin Design</a> -->
    </footer>
    <!-- /. WRAPPER  -->
  
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
