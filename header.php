<header>
	<div class="header">
		<div class="logo_div">
			<a href="home.php" class="titre"><span>Water  Life</span></a>
		</div>
		<div class="MenuCategory">
			<a class="SousMenu" href="home.php"><span>Accueil</span></a>
			<a class="SousMenu" href="products.php"><span>Produits</span></a>
			<a class="SousMenu" href="recherche.php"><span>Rechercher</span></a>

			<!-- On vérifie si l'utilisateur est connecté ou non, si OUI, on affiche l'onglet panier, si NON, on affiche rien -->
			<?php
            if(isset($_SESSION['login']))
            {
            ?>
            <a class="SousMenu" href="cart.php"><span>Panier</span></a>
            <a class="SousMenu" href="signin.php"><span>Mon Compte</span></a>
            <?php 
        	}
        	else
        	{
        	?>
			<a class="SousMenu" href="connexion.php"><span>Connexion</span></a>
			<?php } ?>

		</div>
	</div>
</header>