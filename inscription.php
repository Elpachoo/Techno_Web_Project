<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Bienvenue, inscrivez vous !</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div id="bloc_page">
	<!--<?php include("header.php"); ?> -->
	<div id="titre_principal_inscription">
	<h1>
		Bienvenue sur la page d'inscription.
		
	</h1>
	<br>
	<h2>
		Remplissez correctement les champs et vous pourrez rapidement consulter notre catalogue de bouteille d'eau !
	</h2>
	</div>
	<br>
	<div id="second_titre">
	<h2> A très vite sur notre site ! </h2>
</div>
	<br>
	<div id="logo">
                    <img src="pictures/inscription_logo.jpg" alt="Logo d'inscription" />   
                    </div>
                    <br>
                    <br>          
			
	<div id="formulaire_inscription">
		<form method="post" action="inscription.php">
					<h2>Rentrez vos coordonnées</h2>
				<p>
					<p>Entrez votre Pseudo</p> <input type="text" name ="userName" placeholder="userName" />
					<p>Entrez votre mot de passe</p><input type="password" name="mot_de_passe" placeholder="mot de passe" />
					<p>Entrez votre adresse mail</p><input type="text" name="adresse_mail" placeholder="adresse mail">
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

           		echo "Attention, votre mot de passe ne doit contenir que des minuscules, aucun chiffre ou autre caractère spécial, merci." ;

           	} ?> 
           	<br>
           	<br>
           	<?php include("footer.php"); ?>

	
</div>
</body>
</html>