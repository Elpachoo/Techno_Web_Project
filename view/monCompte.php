<!DOCTYPE html>
<html>
	<head>
	    <link rel="stylesheet" href="css/monCompte.css">
	</head>

	<!-- Indication de la page dans laquelle on se trouve -->
	<?php $page_en_cours = 'none'; ?> 


	<body class="bodymonCompte">

		<?php  // on va chercher les infos dans la bdd
		$req = $bdd->prepare('SELECT * FROM user WHERE Id = ?');
		$req -> execute(array($_SESSION['id_user']));

		while($donnees=$req->fetch())
            {
		?>  
		<!-------------------bloc moncompte-------------------------->
		
		<div class="Titre">
			<h1 class="h1"> Mes Informations </h1>
		</div>

		<div class="conteneur">

			<div class="infosGauche">
				<div class="bloc">
					<h3 class=titrePseudo> NOM D'UTILISATEUR </h3>
					<span class=span> <?php echo $donnees['Login'];?> </span>
				</div>
				<div class="bloc">
					<h3 class=titreNom> NOM </h3>
					<span class=span> <?php echo $donnees['Nom'];?> </span>
				</div>
				<div class="bloc">
					<h3 class=titrePrenom> PRENOM </h3>
					<span class=span> <?php echo $donnees['Prenom'];?> </span>
				</div>
				<div class="bloc">
					<h3 class=titreMail> MAIL </h3>
					<span class=span> <?php echo $donnees['Mail'];?> </span>
				</div>
			</div> <!--fin info gauche-->
			
			<div class="infoDroite">
				<div class="bloc2">
					<h3 class=titrePhone> NUMERO DE TELPHONE </h3>
					<span class=span> <?php echo $donnees['PhoneNumber'];?> </span>
				</div>
				<div class="bloc2">
					<h3 class=titreAdresse> ADRESSE </h3>
					<span class=span>
					 <?php echo $donnees['Adresse'];?>
					  <?php echo $donnees['CodePostal'];?> <?php echo $donnees['Pays'];?>
					</span>
				</div>
			</div>
		</div><!--fin conteneur-->
		<!-------------------fin bloc moncompte-------------------------->

        <?php 
            }
            $req->closeCursor();
        ?>

          
	</body>

</html>