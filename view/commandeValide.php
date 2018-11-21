<!DOCTYPE html>
<html>
<head>
	<title>Commande validée !</title>
	    <link rel="stylesheet" href="css/commandeValide.css">
</head>
<body class="bodycommandeValidee">
	<?php  // on va chercher les infos dans la bdd
		$req = $bdd->prepare('SELECT * FROM user WHERE Id = ?');
		$req -> execute(array($_SESSION['id_user']));

		while($donnees=$req->fetch())
            {
		?> 
		<div class="titrecommande">
			<h1 class="h1"> Commande Validée !</h1>
		</div>


		<div class="conteneur1">
			<h3 class="h3"> Merci <?php echo $donnees['Login']; ?> de nous avoir fais confiance, votre commande vient d'être expediée et arrivera dans de très court délais! Veuillez verifier si vos différentes informations sont exactes : </h3>

			<div class="infosGauche">
			<div class="info">
				<h3 class="soustitre"> Nom </h3>
				<span class="span"> <?php echo $donnees['Nom']; ?></span>
			</div>

			<div class="info">
				<h3 class="soustitre"> Prénom </h3>
				<span class="span"> <?php echo $donnees['Prenom']; ?></span>
			</div>
			</div>


			<div class="infosGauche">
			<div class="info">
				<h3 class="soustitre"> Adresse </h3>
				<span class="span"> <?php echo $donnees['Adresse']; ?></span>
			</div>

			<div class="info">
				<h3 class="soustitre"> Code postal </h3>
				<span class="span"> <?php echo $donnees['CodePostal']; ?></span>
			</div>

			<div class="info">
				<h3 class="soustitre"> Pays </h3>
				<span class="span"> <?php echo $donnees['Pays']; ?></span>
			</div>
			</div>



		</div>

		<div class=""></div>

		<?php 
            }
            $req->closeCursor();
        ?>
	
</body>
</html>