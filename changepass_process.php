<?php
session_start();
require 'config.php';
if(isset($_POST['submit']))
{
$oldpass= $_POST['opwd'];
$newpassword= $_POST['npwd'];
$email=$_SESSION['Email'];

$sql=mysqli_query ($conn,"SELECT Password FROM pg_owner where Password='$oldpass' && Email='$email'");

$num=mysqli_fetch_array($sql);
if($num>0)
{
 $conn=mysqli_query($conn,"update pg_owner set Password='$newpassword' where Email='$email'");

echo "<script>alert('Password Changed Successfully !!')</script>";
	echo"<script>window.open('dashboard.php','_self')</script>";
}
else
{
	echo "<script>alert('Old Password does not match !!')</script>";
	echo"<script>window.open('dashboard.php','_self')</script>";
	
	
}
}
?>