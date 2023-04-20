<?php 
	session_start();
	require 'config.php';
	// Data fetch
	 $email = $_POST['email'];
	 $pwd = $_POST['password'];

	 // Query
	 $sql = "SELECT * FROM pg_owner WHERE Email='$email' and Password='$pwd'";
	

	$result = mysqli_query($conn,$sql);
		echo $num=mysqli_fetch_array($result);
		if(mysqli_num_rows($result) > 0)
			{
				$_SESSION['Name']=$num['Name'];
				$_SESSION['Email']=$num['Email'];
				 
			
				 echo "<script>alert('Login successful')</script>";
		echo"<script>window.open('dashboard.php','_self')</script>";
			}
			else
			{
			
			echo "<script>alert('Invalid Id Password')</script>";
	echo"<script>window.open('index.php','_self')</script>";
			}
?>