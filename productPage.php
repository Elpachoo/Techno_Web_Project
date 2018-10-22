<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	    <title>Water Life</title>
	    <link rel="stylesheet" type="text/css" href="css/fonts.css">
	    <link rel="stylesheet" type="text/css" href="css/header.css">
	     <link rel="stylesheet"  href="css/productPage.css">
	    <link rel="stylesheet" href="css/footer.css">
	</head>

	<!-- Indication de la page dans laquelle on se trouve -->
	<?php $page_en_cours = 'none'; ?>

	<?php include("header.php"); ?> 

	<body class="bodyProduct">
		<!-------------------connexion sql-------------------------->
		<?php // On se connecte à MySQL
	      try{
	        $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');
	      }
	      catch(Exception $e){
	        // En cas d'erreur, on affiche un message et on arrête tout
	        die('Erreur : '.$e->getMessage());
	      }
	    ?>
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
							<form method="post" action="productPage.php?produit=<?php echo $_SESSION['marque'];?>">
								<input id="btnI" class="quantity" step="1" max="10" min="0"  name="quantity" value="0" type="number">	
								<br><br>
								<input id="btnA" class="boutonAjouter" type="submit" name="submit"  value="Ajouter au Panier" />
							</form>
							<button  id="btnP" class="btnPlus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" ></button>
						</div> <!--fin number-input -->
						<br><br>
						
						<?php
    						if(isset($_POST['submit'])){ // si formulaire soumis
    						$truc = !empty($_POST['quantity']) ? $_POST['quantity'] : NULL;
    						$_SESSION['quantity_choice']=$truc;
    						$req = $bdd->prepare('INSERT INTO panier(id_user, Marque, Quantite, Prix, Type, Materiau) VALUES(:id_user, :Marque, :Quantite, :Prix, :Type, :Materiau)');
							$req->execute(array(
							'id_user' => $_SESSION['id_user'],
							'Marque' => $_SESSION['marque'],
							'Quantite' => $_SESSION['quantity_choice'],
							'Prix' => $_SESSION['prix'],
							'Type' => $_SESSION['type'],
							'Materiau' => $_SESSION['materiau']
									));        			

    					}
    					$req->closeCursor();
    					?>
          		 
        				<?php  }else{   ?> <!--si on n'est pas co-->
        				
        				<div class="conn"> 
        					<a class="connexionlien" href="connexion.php">
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



          <?php include('footer.php') ?>
	</body>

	


</html>