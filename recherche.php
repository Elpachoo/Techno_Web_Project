<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Water Life</title>
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

<!-- Initialisation de la session -->
<?php session_start(); ?>

<!-- Ajout de l'header -->
<?php include("header.php"); ?> 

<body>
    <div id="bloc_page">
        <div id="titre_principal_inscription">
            <h1>Bienvenue dans la page de recherche !</h1>
            <br>
            <h2>Ici, faites vos recherches en toute tranquilité afin d'accéder à toute notre gamme de bouteille d'eau !</h2>
            <br>
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
                <p>
                    <strong>Description</strong> :<br />
                    Description : <?php echo $donnees['Marque']; ?> est une <?php echo $donnees['Type']; ?>, contenue dans une bouteille en <?php echo $donnees['Materiau']; ?> pour un prix de <?php echo $donnees['Prix']; ?> l'unite, il nous en reste <?php echo $donnees['Quantite']; ?>. On dit aussi <?php echo $donnees['Description']; ?>
               </p>

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