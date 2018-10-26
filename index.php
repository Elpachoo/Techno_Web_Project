<?php  session_start(); 

include ('header.php'); 

include('database.php');

if (isset($_GET['page']) && file_exists($_GET['page'].".php"))
{	
	$page=$_GET['page'].".php";
	include $_GET['page'].".php";

	if(isset($_POST['submit_bouteille']) && file_exists('submit_bouteille_to_cart.php'))
	{
		include('submit_bouteille_to_cart.php');
	}

	if(isset($_POST['connexion_action']) && file_exists('connexion_action.php'))
	{
		include('connexion_action.php');
	}


		if(isset($_POST['inscription_action']) && file_exists('inscription_action.php'))
	{
		include('inscription_action.php');
	}


} 

else {
	include 'home.php';
}

include ('footer.php');

