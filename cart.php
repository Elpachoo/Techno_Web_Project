<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
	<title>My Cart</title>
	<link rel="stylesheet" type="text/css" href="css/cart.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
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
	<?php include("header.php"); ?> 
</header>
<body class="body">
	<div class="legende"> 
    <?php 
      $req=$bdd->query('SELECT products.Materiau AS materiau, products.Type AS type,products.Description AS description,panier.Prix AS prix, user.Prenom AS prenom_user, panier.Marque AS marque_bouteille, panier.Quantite AS quantite,products.Image AS image FROM panier, user,products WHERE panier.id_user = user.Id and panier.Marque=products.Marque');
      while($donnees=$req->fetch())
    {
    ?>
    <br>
     <fieldset>                   
    <p>
      <table>
          <caption><strong>Panier de <?php echo $donnees['prenom_user']; ?></strong></caption>

              <tr>
                    <td style="width:150px; height:150px; "><img class="img" src="<?php echo $donnees['image']; ?>"></td>
                    <td class="description" style="height:100px"><?php echo $donnees['marque_bouteille']; ?> : <br> 
                          <?php echo $donnees['description']; ?>. <br>
                          Eau : <?php echo $donnees['type']; ?>. <br>
                          Bouteille en : <?php echo $donnees['materiau']; ?></td>
                    <td style="width:100px"></td>
                    <td style="height:150px">Prix : <?php echo $donnees['prix']; ?> € (T.T.C)</td>
                    <td style="width:100px"></td>
                    <td>Quantité : <?php echo $donnees['quantite'] ; ?></td>
                    <td>  </td>
              </tr>
      </table>
      
    </p>  
    </fieldset>
    <br>             
    <?php 
    }
    $req->closeCursor();
    ?>
  </div> 
</body>
<?php include('footer.php') ?>
</html>