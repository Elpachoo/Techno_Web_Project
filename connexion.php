<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> Page de connexion !! </title>
	<link rel="stylesheet" type="text/css" href="css/connexion.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/header.css"> 
	<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<!-- Initialisation de la session -->
<?php session_start(); ?>

<!-- Ajout de l'header -->
<?php include("header.php"); ?> 

<body>
	<h1 id="titre_connexion"> Bienvenue sur la page de connexion ! </h1>
	<br>
	<br>
	<div id="bloc_page">
		<p> 
			Ravi de vous revoir cher client, rentrez vos identifiants afin d'accéder à tous nos services. En cas de problème de connexion, veuillez contacter notre service d'aide.
		</p>
		<div id="logo">
			<img src="pictures/connexion_logo.jpg" alt="Logo de connexion" />   
		</div>
		<br>
		<br>          
		<div id="formulaire_connexion">
			<form method="post" action="signin.php">
				<p>
					<input type="text" name ="userName" placeholder="userName" />
					<input type="password" name="mot_de_passe" placeholder="mot de passe" />
					<input type="submit" value="valider"/>
				</p>
			</form>
		</div>
			<br>
			<br>	
	</div>
</body>

<!-- Ajout du footer -->
<?php include('footer.php') ?>

</html>