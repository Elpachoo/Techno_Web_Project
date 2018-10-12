<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Water Life</title>
	<link rel="stylesheet" href="recherche.css">
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

<body>
    <div id="bloc_page">
    <?php include("header.php"); ?> 
    <div id="titre_principal_inscription">
    <h1>Bienvenue dans la page de recherche !
        </h1>
        <br>
    <h2>Ici, faites vos recherches en toute tranquilité afin d'accéder à toute notre gamme de bouteille d'eau !
        </h2>
        <br>
	<div id="searchbar">
    	<span class="text">Saisissez votre recherche ici !</span>

        <?php 
        if(!isset($_POST['submit']))
        {
        ?>
    	<form method="post" action="recherche.php">
        	<input class="champ" type="text" name="recherche" placeholder="Exemple: Evian.."/>
        	<input class="bouton" type="image" name="submit" src="pictures/search2.png" value=" "  /> 
        	
    	</form>
        <br>
        <br>
        <?php 
        }
        else {
            $req = $bdd->prepare('SELECT * FROM user WHERE Prenom = ?');
            $req->execute(array($_POST['recherche']));

            while ($donnees = $req->fetch())
{
?>
    <p>
    <strong>Jeu</strong> : <?php echo $donnees['Nom']; ?><br />
    Le possesseur de ce jeu est : <?php echo $donnees['Prenom']; ?>, son Login est  <?php echo $donnees['Login']; ?> euros !<br />
    son password est <?php echo $donnees['Password']; ?> et on peut le contacter à <?php echo $donnees['Mail']; ?> au maximum<br />
    <?php echo $donnees['PhoneNumber']; ?> c'est son numero telephone et il habite a  <?php echo $donnees['Adresse']; ?> Voila son code postal <?php echo $donnees['CodePostal']; ?> : <em> il habite en <?php echo $donnees['Pays']; ?></em>
   </p>
<?php
}

$req->closeCursor(); // Termine le traitement de la requête
}
?>
     
	</div>
</body>
<?php include('footer.php') ?>
</html>