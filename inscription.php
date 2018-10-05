<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Bienvenue, inscrivez vous !</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div id="bloc_page">
	<?php include("header.php"); ?>
	<h1>
		Bienvenue sur la page d'inscription.
		Remplis les champs correctement et tout se passera bien ! 
	</h1>
	<br>
	<h2> A très vite sur notre site ! </h2>
	<br>

	<div id="formulaire_connexion">
		<form method="post" action="inscription.php">
					<h2>Rentrez vos coordonnées</h2>
				<p>
					<p>Entre ton Pseudo</p> <input type="text" name ="userName" placeholder="userName" />
					<p>Entre ton mot de passe</p><input type="password" name="mot_de_passe" placeholder="mot de passe" />
					<p>Entre ton adresse mail</p><input type="text" name="adresse_mail" placeholder="adresse mail">
					<input type="submit" value="valider"/>

				</p>
		</form>
		<?php 
           if(isset($_POST['mot_de_passe'])) { 
           	?> 

           		<p> super t'es bien enregistré, on va te renvoyer vers la page d'accueil avec l'accès à ton panier </p>
           		<?php
  				header('Location: signin.php');
  				exit();
						?>

           		<?php
           	}
           	
           	else 

           	{

           		echo  "Inscrivez-vous correctement pour gagner du temps." ;

           	} ?>



	<!--	<?php 
           if(isset($_POST['userName']) AND isset($_POST['mot_de_passe']) AND isset($_POST['adresse_mail'])) { 
           	?> 
           	<?php 
           	header('Location: signin.php');
  				exit(); 
  				
           	 }  ?> -->

	</div>
</div>
</body>
</html>