        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="dashboard.php">Administrator</a>
            </div>

            <div class="notifications-wrapper">
            <ul class="nav">       
                <li class="dropdown">
                   
                    <ul class="dropdown-menu dropdown-user">
                       <!--  <li><a href="#"><i class="fa fa-user-plus"></i> My Profile</a> -->
                        </li>
                        <li class="divider"></li>
                        
                        </li>
                    </ul>
                </li>
            </ul>
               
            </div>
        </nav>
	
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <h3 style="color: #f1f1f1f1;"><?php echo $_SESSION['Name']; ?></h3>
							
                        </div>
                    </li>
                    <li>
                        <a class="active-menu"  href="dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-home "></i>Resources<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_resources.php"></i>Add Resources</a>
                            </li>
                             <li>
                                <a href="manage_resources.php"></i>Manage Resources</a>
                            </li>                         
                        </ul>
                    </li> 
                    <li>
                        <a href="viewenquiry.php"><i class="fa fa-users"></i>Enquiry</a>
                        
                    </li>  
					<li><a href="changepassword.php"><i class="fa fa-sign-out"></i> Change Password</a></li>
					<li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
									
                </ul>
            </div>

        </nav>




<li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>



