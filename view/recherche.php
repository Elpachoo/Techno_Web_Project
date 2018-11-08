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


<!-- Indication de la page dans laquelle on se trouve -->
<?php $page_en_cours = 'menu_rechercher'; ?>

<!-- Ajout de l'header --> 

<body class="bodyRecherche">
    <div id="bloc_page">
        <div id="titre_principal_inscription">
            <br>
            <h1 class="h1">Bienvenue dans la page de recherche !</h1>
            <br>
            <h2 class="h2">Ici, faites vos recherches en toute tranquilité afin d'accéder à toute notre gamme de bouteille d'eau !</h2>
            
            <div id="searchbar">
                <span class="text">Saisissez votre recherche ici !</span>
                
                

            	<form method="post" action="index.php?page=recherche">
                	<input class="champ" type="text" name="recherche" placeholder="Exemple: Evian.."/>
                	<input class="bouton" type="submit" name="submit" src="pictures/search2.png" value="valider"  /> 
                	
            	</form>
                <br>
                <br>
                
            </div>
        </div>
    </div>
</body>


</html>