<?php
session_start();
if($_POST['lang']=="en")
{
$_SESSION['lang'] = "en";
}
else
{
	$_SESSION['lang'] = "pl";
	
}
echo $_SESSION['lang'];
//echo json_encode(array("abc"=>'successfuly registered'));

?>
   
