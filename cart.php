<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
	<title>My Cart</title>
  <link rel="icon" href="pictures/favicon.ico" />
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

<!-- Indication de la page dans laquelle on se trouve -->
<?php $page_en_cours = 'menu_panier'; ?>

<!-- Ajout de l'header -->
<header>
	<?php include("header.php"); ?> 
</header>

<body class="body">
	<div class="legende"> 
    <?php 
      $req=$bdd->query('SELECT products.Description AS description,panier.Prix AS prix, user.Prenom AS prenom_user, panier.Marque AS marque_bouteille, panier.Quantite AS quantite,products.Image AS image FROM panier, user,products WHERE panier.id_user = user.Id and panier.Marque=products.Marque');
      while($donnees=$req->fetch())
    {
    ?>
    <br>
     <fieldset>                   
    <p>
      <table>
          <caption><strong>Panier de <?php echo $donnees['prenom_user']; ?></strong></caption>

              <tr>
                    <th style="width:400px; height:50px;">Photo du Produit</th>
                    <th style="width:300px">Nom du Produit</th>
                    <th style="width:200px">Prix</th>
                    <th style="width:200px">Quantité</th>
                    <th>Actions</th>
              </tr>
              <tr>
                    <td style="width:300px; "><img class="img" src="<?php echo $donnees['image']; ?>"></td>
                    <td><?php echo $donnees['marque_bouteille']; ?> : <br> <?php echo $donnees['description']; ?></td>
                    <td><?php echo $donnees['prix']; ?> € (T.T.C)</td>
                    <td><?php echo $donnees['quantite'] ; ?></td>
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

<!-- Ajout du footer -->
<?php include('footer.php') ?>

</html>