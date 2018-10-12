<!DOCTYPE html>
<html>
<head>
	<title>My Cart</title>
	<link rel="stylesheet" type="text/css" href="css/cart.css">
</head>
<?php
try
{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>

<header>
	<!-- <?php include 'header.php' ?> -->
</header>
<body>
	<p>Your cart is empty</p>

	<div class="legende"> 
    <?php 
    $req=$bdd->query('SELECT user.Prenom AS prenom_user, panier.Marque AS marque_bouteille, panier.Quantite AS quantite FROM panier, user WHERE panier.id_user = user.Id ');
    while($donnees=$req->fetch())
    {
    ?>
                        
    <p>
    <strong>Description</strong> :<br />

    Ici pour le test, on affiche le panier de : <?php echo $donnees['prenom_user']; ?> . Il a commande de la <?php echo $donnees['marque_bouteille']; ?> Il en a commande <?php echo $donnees['quantite'] ; ?>
   </p>               
    <?php 
    }
    $req->closeCursor();
    ?>
     </div> 
</body>
</html>