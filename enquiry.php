<?php 
	session_start();
	require 'config.php';
	
	if(isset($_POST['submit']))
{
		$id = $_POST["id"];
		$name = $_POST['name'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		
		$Insert_Booking_Sql = "INSERT INTO enquiry(id,name,telephone,email) VALUES ('$id','$name','$tel','$email')";
        $data = mysqli_query($conn, $Insert_Booking_Sql);
	
		
		header("location:index.php");
		


}
	
	

?>
	
	
	
	
	