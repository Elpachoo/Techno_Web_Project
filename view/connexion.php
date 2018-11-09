<!--<?php 
 session_start(); 
?> -->

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/connexion.css">
	
</head>

<!-- Indication de la page dans laquelle on se trouve -->
<?php $page_en_cours = 'menu_connexion'; ?>



<!-- Module permettant d'éviter à l'utilisateur d'accéder à cette page s'il est déjà connecté -->
	<!-- -->

<body>
	<div class="connexion">
		<fieldset>
			<legend id="titre_connexion">
				Connexion
			</legend>

			<!-- Ajout Logo ou non au choix, à voir 
			<div class="image_logo">
				<img src="pictures/WaterLife_V2.png">
			</div>
			-->

			<form method="POST" action="index.php?page=connexion" name="connect">
				<div class="champ_a_remplir" id="login_connexion">
					<div class="box">
						<i class="icones" id="icone_login"><img src="icons/utilisateur-neutre.png"></i>
					</div>

					<div class="input">
						<input class="input_champ" type="text" name="login" placeholder="Login/Adresse-mail" id="box_login" required>
					</div>	
				</div>

				<div class="champ_a_remplir" id="mot_de_passe_connexion">
					<div class="box">
						<i class="icones" id="icone_mdp"><img src="icons/mot-de-passe.png"></i>
					</div>

					<div class="input">
						<input class="input_champ" type="password" name="mot_de_passe" placeholder="Mot de passe" id="box_mdp" required>
					</div>
				</div>

				<div class="se_connecter">
					<div class="icone_seconnecter"></div>
					<button type="submit" class="bouton_connexion" value="Submit" name="connexion_action">
						<span id="bouton_connexion">Se connecter</span>
					</button>
				</div>

				<div class="s_inscrire">
					<span id="texte-inscrire">
						Pas encore inscrit ? Pas de soucis, <a id="redirection_inscription" href="index.php?page=inscription">cliquez ici</a>  ! :)
					</span>
				</div>
			</form>
		</fieldset>
	</div>
</body>


</html>