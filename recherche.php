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

<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>

<!-- Indication de la page dans laquelle on se trouve -->
<?php $page_en_cours = 'menu_rechercher'; ?>

<!-- Ajout de l'header -->
<?php include("header.php"); ?> 

<body class="bodyRecherche">
    <div id="bloc_page">
        <div id="titre_principal_inscription">
            <br>
            <h1 class="h1">Bienvenue dans la page de recherche !</h1>
            <br>
            <h2 class="h2">Ici, faites vos recherches en toute tranquilité afin d'accéder à toute notre gamme de bouteille d'eau !</h2>
            
            <div id="searchbar">
                <span class="text">Saisissez votre recherche ici !</span>

                <?php 
                if(!isset($_POST['submit']))
                {
                ?>

            	<form method="post" action="recherche.php">
                	<input class="champ" type="text" name="recherche" placeholder="Exemple: Evian.."/>
                	<input class="bouton" type="submit" name="submit" src="pictures/search2.png" value="valider"  /> 
                	
            	</form>
                <br>
                <br>

                <?php 
                }
                else 
                {
                    $req = $bdd->prepare('SELECT * FROM products WHERE Marque = ?');
                    $req->execute(array($_POST['recherche'])); 
                ?>

                <form method="post" action="recherche.php">
                    <input class="champ" type="text" name="recherche" placeholder="Exemple: Evian.."/>
                    <input class="bouton" type="submit" name="submit" src="pictures/search2.png" value="valider"  /> 
                </form>

                <?php  
                while ($donnees = $req->fetch())
                {
                ?>
                <div class="description">
                    <p class="para">
                        <strong class="underligned"> Description </strong> :
                        <br><br>
                        <span class="lien"> 
                             <a class="a" href="productPage.php?produit=<?php echo $donnees['Marque'];?> "><?php echo $donnees['Marque']; ?></a>
                        </span>est une eau <?php echo $donnees['Type']; ?>,
                        contenue dans une bouteille en <?php echo $donnees['Materiau']; ?>
                        pour un prix de <?php echo $donnees['Prix']; ?> € l'unité, 
                        il nous en reste <?php echo $donnees['Quantite']; ?>. 
                        On dit aussi <?php echo $donnees['Description']; ?>
                   </p>
                   <?php $type= $donnees['Type']; ?>

                   <a href="productPage.php?produit=<?php echo $donnees['Marque'];?> "><img class="img" src="<?php echo $donnees['Image'];?>" alt="Product" /> </a>
                </div>
                <br> <br> <br>

                 <strong class="underligned2"> D'autres produits que vous pourriez aimer : </strong> 


                <div class="produitsup">

                    <?php 
                        $req = $bdd->prepare('SELECT * FROM products WHERE Type = ? ORDER BY RAND() LIMIT 3');
                        $req->execute(array($type)); 

                    while ($reponse = $req->fetch())
                    {
                    ?>

                    <a href="productPage.php?produit=<?php echo $reponse['Marque'];?> "><img class="img2" src="<?php echo $reponse['Image'];?>" alt="Product" /> </a>

                     <?php }?>
                </div>

                   

                <?php
                }
                $req->closeCursor(); // Termine le traitement de la requête
                }
                ?>
            </div>
        </div>
    </div>
</body>

<!-- Ajout du footer -->
<?php include('footer.php') ?>

</html>