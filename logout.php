<?php 
session_start(); 
// $_SESSION['email'] = ''; 
unset($_SESSION['Name']); 
// session_destroy(); 
header('location:../index.php'); 
?>
