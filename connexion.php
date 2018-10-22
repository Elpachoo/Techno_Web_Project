<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> Page de connexion !!</title>
	<link rel="icon" href="pictures/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/connexion.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/header.css"> 
	<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<!-- Indication de la page dans laquelle on se trouve -->
<?php $page_en_cours = 'menu_connexion'; ?>

<!-- Ajout de l'header -->
<?php include("header.php"); ?> 

<!-- Module de connexion -->
<?php
		// si l'utilisateur appuie sur le bouton nommé "connexion" :
		if(isset($_POST['connexion']))
		{
			$login = $_POST['login'];
			$password = $_POST['mot_de_passe'];

			// si les champs sont remplis alors :
			if($login && $password)
			{
				// on se connecte à MySql
				$connect = mysqli_connect('localhost', 'root','', 'ecommerce');

				// on crée notre requête
				$req = "SELECT * FROM user WHERE Login = '$login' && Password = '$password'";

				// on envoie la requête
				$res = mysqli_query($connect, $req);

				$count = mysqli_num_rows($res);

				if($count == 1)
				{

					while ($row = $res->fetch_assoc()) 
					{
        			$_SESSION['login'] = $row['Login'];
        			$_SESSION['id_user'] = $row['Id'];
        			header("Location: products.php");
    				}

				}
				else echo "Identifiant ou mot de passe incorrect";
			}
		}
	?>

<!-- Module permettant d'éviter à l'utilisateur d'accéder à cette page s'il est déjà connecté -->
	<?php
        if(isset($_SESSION['login']))
        header('Location: home.php')        
    ?>

<body>
	<div class="connexion">
		<fieldset>
			<legend id="titre_connexion">
				Connexion
			</legend>

			<div class="image_logo">
				<img src="pictures/WaterLife_V2.png">
			</div>

			<form method="POST" action="connexion.php">
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
					<button type="submit" class="bouton_connexion" value="Submit" name="connexion">
						<span id="bouton_connexion">Se connecter</span>
					</button>
				</div>

				<div class="s_inscrire">
					<span id="texte-inscrire">
						Pas encore inscrit ? Pas de soucis, <a id="redirection_inscription" href="#">cliquez ici</a>  ! :)
					</span>
				</div>
			</form>
		</fieldset>
	</div>
</body>

<!-- Ajout du footer -->
<?php include('footer.php') ?>

</html>