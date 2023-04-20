<?php
    session_start();
    require 'config.php';
     
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
                        <h1 class="page-head-line">User Enquiry Detail</h1>
                    </div>
                </div>
                <div class="row">
                <!-- <div class="col-md-8"> -->
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Enquiry List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>telephone</th>
											 <th>Property type</th>
											 <th>Property Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        // Query
                                        $select_sql_user = "SELECT a.*,b.* from enquiry as a,resources as b where a.id = b.id;";
										
                                        
                                        $result = $conn->query($select_sql_user);

                                        if ($result->num_rows>0) {
											
 
											$count  = 1;
											
                                            while($row = $result->fetch_assoc()){ 
											
											$r_id = $row['e_id'];
                                            $name = $row["name"];
											$email = $row["email"];
											$telephone = $row["telephone"];
											$R_name = $row["R_name"];
											$pname = $row["pname"];
											
                                           
                                            
                                             
                                                ?>
                                        <tbody>      
                                         <tr>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $name; ?></td>
											<td><?php echo $email; ?></td>
											<td><?php echo $telephone; ?></td>
											<td><?php echo $R_name; ?></td>
											<td><?php echo $pname; ?></td>
											<td><a class="btn btn-light btn-radius grd1 btn-brd" data-toggle="modal" data-target="#response<?php echo $r_id ?>" >Enquiry</a>
											<div class="modal" id="response<?php echo $r_id ?>" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h2 class="h4 text-center">Response</h2>
                </div>
                <div class="modal-body">
              
                           
                           <form method="POST" action="enquiry_process.php">
                                <div class="row">
                                    <div class="col-md-8">
									<input type="text" value="<?php echo $name; ?>" name="name1" hidden>
									<input type="text" value="<?php echo $email; ?>"  name="email1" hidden>
									<input type="text" name="rid" value="<?php echo $r_id ?>" hidden>
                                        <div class="form-group"> <textarea type="text" rows="5" name="response" class="form-control"  id="response" required="TRUE"></textarea> </div>
									 <button  class="btn btn-primary" name = "submit">Send Response</button>
                       
                             
                         
									</div>
                                    
                                    	</div>    
 </form>
						  
                </div>
               
              </div>
            </div></div>   
		
											</td>
											
											
											
											
											
											<td><a class="btn btn-light btn-radius grd1 btn-brd" data-toggle="modal" data-target="#response1<?php echo $r_id ?>" >Zapytanie</a>
											<div class="modal" id="response1<?php echo $r_id ?>" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h2 class="h4 text-center">Odpowiedź</h2>
                </div>
                <div class="modal-body">
                <form method="POST" action="enquiry_process.php">
                              
                                <div class="status"></div>
                                <div class="row">
                                    <div class="col-md-8">
									
									<input type="text" name="rid"  value="<?php echo $r_id ?>" hidden>
								<input type="text" value="<?php echo $name; ?>"  name="name1" hidden>
									<input type="text" value="<?php echo $email; ?>"  name="email1" hidden>
                                        <div class="form-group"> <textarea type="text" rows="5" name="response" class="form-control" id="Tranrules" required="TRUE"></textarea> </div>
										</div>
                                    
                                    	</div>
                                
                               <button type="submit" class="btn btn-primary" name = "submit" >Wysłać odpowiedź</button>
                           </form>
						
                </div>
               
              </div>
            </div> </div>
											</td>
                                                
                                        </tr>
                                   <?php  
										$count++;
										
											}
                                        }
                                    ?>
                                </tbody>
                                </table>
    

                           
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                <!-- </div> -->
               
            </div>
                
              

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   <footer >
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