<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
	<title>Water Life</title>
	<link rel="icon" href="pictures/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" href="css/home.css">
	


<?php  session_start(); 

include ('view/header.php'); 

include('database.php');

if (isset($_GET['page']))
{	
	$page=$_GET['page'];
	if(file_exists('view/'.$page.'.php'))
	{
		include ('view/'.$page.'.php');

	}
	
	if(file_exists('action/'.$page.'.php'))
	{
		include ('action/'.$page.'.php');
	}	
} 

else {
	include ('view/home.php');
}

include ('view/footer.php');
?>
</html>

