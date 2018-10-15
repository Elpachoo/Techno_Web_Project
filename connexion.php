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
					$_SESSION['login'] = $login;
					header("Location: products.php");
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
	<h1 id="titre_connexion"> Bienvenue sur la page de connexion ! </h1>
	<br>
	<br>
	<div id="bloc_page">
		<p> 
			Ravi de vous revoir cher client, rentrez vos identifiants afin d'accéder à tous nos services. En cas de problème de connexion, veuillez contacter notre service d'aide.
		</p>
		<div id="logo">
			<img src="pictures/connexion_logo.jpg" alt="Logo de connexion" />   
		</div>
		<br>
		<br>          
		<div id="formulaire_connexion">
			<form method="POST" action="connexion.php">
				<div data-validate="prout">
					<input type="text" name ="login" placeholder="Veuillez entrer votre login"/>
				</div>
					<input type="password" name="mot_de_passe" placeholder="Veuillez entrer votre mot de passe" />
					<button type="submit" name="connexion" value="Submit">
						Se connecter
					</button>
			</form>
		</div>
			<br>
			<br>	
	</div>
</body>

<!-- Ajout du footer -->
<?php include('footer.php') ?>

</html>