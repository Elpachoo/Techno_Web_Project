<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Page de connexion !! </title>
		<link rel="stylesheet" type="text/css" href="signin_inscription_footer.css"> 
	</head>
	<body>

    <?php include("header.php"); ?>
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
					<!-- Ici, pour vérifier le fonctionnement de la page sans la base de donnée, il faut rentrer le mot de passe "bouteille" pour être redirigé vers la page client et produits. -->
				<?php 
           if(isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "bouteille") { 
           	?> 
 
           		<p> super t'es bien connecté, on va te renvoyer vers la page d'accueil avec l'accès à ton panier </p>
           		<?php
  				header('Location: products.php');
  				exit();
						?>
						<div id="message_indication">
           		<?php
           	}
           	
           	else
           	{

           		echo '<p> Mot de passe oublié ? <p>';

           	} ?> </div>

       		<br>
       		<br>	
			<?php include ("footer.php"); ?>
		</div>
	</body>
</html>