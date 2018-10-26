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

