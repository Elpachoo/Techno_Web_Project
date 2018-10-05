<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Page de connexion !! </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

    <?php include("header.php"); ?>
		<div id="bloc_page">
			<p> 
				Ravi de vous revoir cher client, rentrez vos identifiants afin d'accéder à tous nos services.
			</p>
			<div id="formulaire_connexion">
				<form method="post" action="signin.php">

				<p>
					<input type="text" name ="userName" placeholder="userName" />
					<input type="password" name="mot_de_passe" placeholder="mot de passe" />
					<input type="submit" value="valider"/>

				</p>
				</form>
				</div>

				<?php 
           if(isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "bouteille") { 
           	?> 

           		<p> super t'es bien connecté, on va te renvoyer vers la page d'accueil avec l'accès à ton panier </p>
           		<?php
  				header('Location: account-page.php');
  				exit();
						?>
           		<?php
           	}
           	
           	else
           	{

           		echo '<p> Mot de passe oublié ? <p>';

           	} ?>
       			
			
		</div>
	</body>
</html>