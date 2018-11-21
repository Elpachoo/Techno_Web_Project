<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/productPage.css">
	</head>

	<!-- Indication de la page dans laquelle on se trouve -->
	<?php $page_en_cours = 'none'; ?>

	 

	<body class="bodyProduct">

	    <!-------------------FIN connexion sql-------------------------->

		<?php  // on va chercher les infos dans la bdd
		$req = $bdd->prepare('SELECT * FROM products WHERE Marque = ?');
		$req -> execute(array($_GET['produit']));

		while($donnees=$req->fetch())
            { 
            	$_SESSION['prix']=$donnees['Prix'];
            	$_SESSION['marque']=$donnees['Marque'];
            	$_SESSION['type']=$donnees['Type'];
            	$_SESSION['description']=$donnees['Description'];
            	$_SESSION['materiau']=$donnees['Materiau'];
            	$_SESSION['quantite']=$donnees['Quantite'];
            	$_SESSION['image']=$donnees['Image'];

            		} $req->closeCursor()	?>  
		<!-------------------bloc produit-------------------------->
		<div class="containerProduit"> 
			<div class="image">
				<img class="img" src="<?php echo $_SESSION['image'];?>" alt="Product" /> 
			</div>

			<div class="infos">
				<div class="titrePrix">
					<p>
					<h1 class="h1"> <?php echo $_SESSION['marque']; ?></h1>
					<h2 class="h2"> <?php echo $_SESSION['type']; ?> </h2>
					</p>
				</div>
				<div class="panierPresentation">
					<div class="presentation"> 
						<div class=description>
							<h3 class="h3"> DESCRIPTION </h3>
						    <p class="paragraphe"><?php echo $_SESSION['description']; ?></p>
						</div>
						<div class=materiau>
							<h3 class="h3"> MATIERE </h3>
						    <p class="paragraphe">Contenant fait en <?php echo $_SESSION['materiau']; ?></p>
						</div>
						<br><br><br>
						<div class="stock">
							<?php
								if ( $_SESSION['quantite']==0) {
	    							echo "<h3 class='h3'>Stocks épuisés</h3>";
	   							} else {
	   								echo "<h3 class='h3'>En stock</h3>";
								}
							?>
						</div>
					</div> <!-- fin div presentation-->

					

					<div class = "panier"> 
						<h2 class="prix"> € <?php echo $_SESSION['prix']; ?> </h2>
						<h5 class="ttc"> T.T.C </h5>
						<br><br><br>

						<?php //SI on est connecte
            				if(isset($_SESSION['login']))
           					{
            			?>
						<div class = quantite>
							<h3 class="h3"> Quantité </h3>
							<br><br><br>
						</div>

						<div class="number-input">
							<button id="btnM" class="btnMoins" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
							<form method="post" action="index.php?page=productPage&produit=<?php echo $donnees['Marque'];?>">
								<input id="btnI" class="quantity" step="1" max="9" min="1"  name="quantity" value="1" type="number">	
								<br><br>
								<input id="btnA" class="boutonAjouter" type="submit" name="submit_bouteille"  value="Ajouter au Panier" />
							</form>
							<button  id="btnP" class="btnPlus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" ></button>
						</div> <!--fin number-input -->
						<br><br>
						
						
          		 
        				<?php  }else{   ?> <!--si on n'est pas co-->
        				
        				<div class="conn"> 
        					<a class="connexionlien" href="index.php?page=connexion">
        						<div class="souligne"> Se connecter</div> pour accéder au panier 
        					</a>
        					<br>
        					<img class="panier" src="icons/caddie.png">
        				</div>
        				<?php } ?>

					</div><!-- fin div ppanier-->
        		</div><!--fin div panier presentation-->

			</div><!--fin div infos-->
		</div><!-- fin div containerProduit-->
		<!-------------------fin bloc produit-------------------------->

	</body>

</html>