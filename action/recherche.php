<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Water Life</title>
    <link rel="icon" href="pictures/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/recherche.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<body class="bodyRecherche">
    <div id="bloc_page">
<?php           if(isset($_POST['submit']))
                {
                    $req = $bdd->prepare('SELECT * FROM products WHERE Marque = ?');
                    $req->execute(array($_POST['recherche'])); 
                ?>

                <?php  
                while ($donnees = $req->fetch())
                {
                ?>
                <div class="description">
                    <p class="para">
                        <strong class="underligned"> Description </strong> :
                        <br><br>
                        <span class="lien"> 
                             <a class="a" href="index.php?page=productPage&produit=<?php echo $donnees['Marque'];?> "><?php echo $donnees['Marque']; ?></a>
                        </span>est une eau <?php echo $donnees['Type']; ?>,
                        contenue dans une bouteille en <?php echo $donnees['Materiau']; ?>
                        pour un prix de <?php echo $donnees['Prix']; ?> € l'unité, 
                        il nous en reste <?php echo $donnees['Quantite']; ?>. 
                        On dit aussi <?php echo $donnees['Description']; ?>
                   </p>
                   <?php $type= $donnees['Type']; ?>

                   <a href="index.php?page=productPage&produit=<?php echo $donnees['Marque'];?> "><img class="img" src="<?php echo $donnees['Image'];?>" alt="Product" /> </a>
                </div>
                <br> <br> <br>

                <?php $req->closeCursor(); ?>
                 <strong class="underligned2"> D'autres produits que vous pourriez aimer : </strong> 


                <div class="produitsup">

                    <?php 
                        $req = $bdd->prepare('SELECT Marque, Image FROM products WHERE Type = ? ORDER BY RAND() LIMIT 3');
                        $req->execute(array($type)); 

                    while ($reponse = $req->fetch())
                    {
                    ?>

                    <a href="index.php?page=productPage&produit=<?php echo $reponse['Marque'];?> "><img class="img2" src="<?php echo $reponse['Image'];?>" alt="Product" /> </a>

                     <?php }?>
                </div>

                   

                <?php
                }
                $req->closeCursor(); // Termine le traitement de la requête
                }
                ?>
            </div>
        </body>
                </html>