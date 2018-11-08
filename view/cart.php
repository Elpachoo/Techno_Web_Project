<!DOCTYPE html>
<html>
<head>	
	<link rel="stylesheet" type="text/css" href="css/cart.css">
</head>


<!-- Indication de la page dans laquelle on se trouve -->
<?php $page_en_cours = 'menu_panier'; ?>

<!-- Ajout de l'header -->

<body class="body">
	<div class="legende"> 
    <div class="Titre">
      <h1 class="h1"> Mon Panier </h1>
    </div>
    <?php 
      $req=$bdd->query('SELECT panier.Prix*panier.Quantite AS pri, products.Description AS description,panier.Prix AS prix, panier.Marque AS marque_bouteille, panier.Quantite AS quantite,products.Image AS image, panier.id AS idcommande FROM panier,products WHERE panier.id_user ='.$_SESSION['id_user'].' and panier.Marque=products.Marque');
      while($donnees=$req->fetch())
    {
      $_SESSION['commandeid']=$donnees['idcommande'];
    ?>
    
    <div class="conteneur">                
    <p>
      <table>
          

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
                    <td><?php echo $donnees['pri']; ?> € (T.T.C)</td>
                    <td><div class="number-input">
                                <button id="btnM" class="btnMoins" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                            <form method="post" action="">
                                  <input id="btnI" class="quantity" step="1" max="10" min="0"  name="modif_quantity" value="<?php echo $donnees['quantite']; ?>" type="number"> 
                            
                                  <input id="btnA" class="boutonAjouter" type="submit" name="modif_quantity_action"  value="Modifier" />
                                  
                            </form>
                            
                                <button  id="btnP" class="btnPlus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" ></button>
                        </div> <!--fin number-input --></td>
                    <td><a href=""><img class="img" src="icons/poubelle.png" alt="" title="Supprimer du panier"/> </a></td>
              </tr>
      </table>
      
    </p> 
    </div> <?php 



                            ?>    
               
    <?php 
    }
    $req->closeCursor();
    
                              
    ?>
  </div> 
</body>
</html>