<!DOCTYPE html>
<html>
<head>
	<title>Commande validé !</title>
	    <link rel="stylesheet" href="css/commandeValide.css">
</head>
<body class="body">
	<div class="legende">
		<div class="Titre">
			<h1 class="h1"> Commande validée </h1>
				<div>
					<?php  
					$req = $bdd->prepare('SELECT * FROM user, panier WHERE Id = ?');
					$req -> execute(array($_SESSION['id_user']));

						while($donnees=$req->fetch())
            {
					?> 
    					<div class="conteneur">
    						<p>
    							<table>
    								<tr>
    									<th class="">Votre date de livraison estimée est :
    										<br> 24 Decembre 2018 à 00h00
    									</th>
    									<th>Votre commande a été expediée à votre adresse :</th>
    								</tr>
    								<tr>
    									<td> </td>
    									<td>Fiche client:
    										<div class="infosClient">
												<div class="bloc">
													<h3 class=titreNom> Nom : <?php echo $donnees['Nom'];?></h3>	
												</div>
												<div class="bloc">
													<h3 class=titrePrenom> Prenom : <?php echo $donnees['Prenom'];?> </h3>
												</div>
												<div class="bloc">
													<h3 class=titreAdresse> Adresse : <?php echo $donnees['Adresse'];?> </h3>
												</div>
												<div class="bloc">
													<h3 class=titreCode> Code Postal : <?php echo $donnees['CodePostal'];?> </h3>
												</div>
												<div class="bloc">
													<h3 class=titrePays> Pays : <?php echo $donnees['Pays'];?> </h3>
												</div>
											</div>

    									</td>
    								</tr>
    							</table>
    						</p>
    					</div>
    					<div class="text">
    						<h3 class="h3">On vous rappelle que votre commande est composée de (Quantité) bouteille de (Marque) </h3>
    					</div>
				</div>
		</div>
	</div>
	<?php 
    }
    $req->closeCursor();
    
                              
    ?>
</body>
</html>