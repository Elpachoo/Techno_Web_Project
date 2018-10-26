<header>
	<!-- On lance une session directement depuis le header -->

	<div class="header">
		<div class="logo_div">
			<a href="home.php" class="titre"><span>Water  Life</span></a>
		</div>
		<div class="MenuCategory">
			<a class="SousMenu" href="index.php?page=home" >
				<img class="icon_menu" src="icons/accueil.png">&nbsp;<span>Accueil</span>
			</a>

			<a class="SousMenu" href="index.php?page=products" >
				<img class="icon_menu" src="icons/bouteille.png">&nbsp;<span>Produits</span>
			</a>

			<a class="SousMenu" href="index.php?page=recherche"  >
				<img class="icon_menu" src="icons/chercher.png">&nbsp;<span>Rechercher</span>
			</a>

			<!-- On vérifie si l'utilisateur est connecté ou non, si OUI, on affiche l'onglet panier, si NON, on affiche rien -->
			<?php

            if(isset($_SESSION['login']))
            {
            ?>

            <a class="SousMenu" href="index.php?page=cart" >
            	<img class="icon_menu" src="icons/caddie.png">&nbsp;<span>Panier</span>
            </a>

            <a class="SousMenu" href="index.php?page=monCompte" >
            	<img class="icon_menu" src="icons/utilisateur.png">&nbsp;<span>Mon Compte</span>
            </a>

            <a class="SousMenu" id="deconnexion" href="index.php?page=deconnexion"><img class="icon_menu" src="icons/deconnexion.png">&nbsp;<span>Déconnexion</span></a>

            <?php 
        	}
        	else
        	{
        	?>

			<a class="SousMenu" href="index.php?page=connexion" >
				<img class="icon_menu" src="icons/entrer.png">&nbsp;<span>Connexion</span>
			</a>

			<?php } ?>
		</div>
	</div>
</header>