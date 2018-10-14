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

	<?php include("header.php"); ?> 

	<body>
		<?php // On se connecte à MySQL
	      try{
	        $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');
	      }
	      catch(Exception $e){
	        // En cas d'erreur, on affiche un message et on arrête tout
	        die('Erreur : '.$e->getMessage());
	      }
	    ?>



		<p>Bonjour <?php echo $_GET['produit']; ?> !</p>

		<?php
		$req = $bdd->prepare('SELECT * FROM products WHERE Marque = ?');
		$req -> execute(array($_GET['produit']));

		while($donnees=$req->fetch())
            {
		?>

		<div class="legende"> <?php echo $donnees['Description']; ?></div>
		<?php echo $donnees['Marque']; ?>
		<img class="img" src="<?php echo $donnees['Image'];?>" alt="Product" /> 

        <?php 
            }
            $req->closeCursor();
        ?>

          
	</body>

	<?php include('footer.php') ?>


</html>