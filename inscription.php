<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>S'inscrire</title>
	<link rel="icon" href="pictures/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/inscription.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/header.css"> 
	<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<!-- Indication de la page dans laquelle on se trouve -->
<!--<?php $page_en_cours = 'none'; ?> -->

<!-- Ajout de l'header -->
<!--<?php include("header.php"); ?>  -->
<?php
		// si l'utilisateur appuie sur le bouton nommé "connexion" :
		if(isset($_POST['inscription']))
		{
			$login = $_POST['login'];
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$mdp = $_POST['mdp'];
			$verifmdp = $_POST['verif-mdp'];
			$mail = $_POST['mail'];
			$verifmail = $_POST['verif-mail'];
			$phone = $_POST['phone'];
			$adresse=$_POST['adresse'];
			$codepostal = $_POST['code-postal'];
			$ville = $_POST['ville'];
			$pays = $_POST['pays'];


			// si les champs sont remplis alors :
			if($login && $nom && $prenom && $mdp && $verifmdp && $mail && $verifmail && $phone && $adresse && $codepostal && $ville && $pays)
			{
				// on se connecte à MySql
 // On se connecte à MySQL
		      try{
		        $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');
		      }
		      catch(Exception $e){
		        // En cas d'erreur, on affiche un message et on arrête tout
		        die('Erreur : '.$e->getMessage());
		      }
	    

				// on crée notre requête
				$req = $bdd->prepare('INSERT INTO user(Nom, Prenom, Login, Password, Mail, PhoneNumber, Adresse, CodePostal, Pays) VALUES(:nom, :prenom, :login, :password, :mail, :phonenumber, :adresse, :codepostal, :pays)');
							$req->execute(array(
							'nom' => $nom,
							'prenom' => $prenom,
							'login' => $login,
							'password' => $mdp,
							'mail' => $mail,
							'phonenumber' => $phone, 
							'adresse' => $adresse, 
							'codepostal' => $codepostal,
							'pays' => $pays
									)); 
							
							header("Location: connexion.php");
				}
				

				else echo " <div class='alert'>
  								<span class='closebtn' onclick=\"this.parentElement.style.display='none';\">&times;</span>
  								Remplissez tous les champs s'il vous plaît !
							</div> ";
			$req->closeCursor();}

		
	?>

<body>
	<div class="inscription">
		<fieldset>
			<legend id="titre-inscription">
				Inscription
			</legend>

			<form method="POST" action="inscription.php">
				<div class="champ-a-remplir" id="login">
					<div class="div-icone">
						<i class="icone"><img src="icons/login.png"></i>
					</div>

					<div class="input">
						<input class="input-champ" type="text" name="login" placeholder="Login" required>
					</div>
				</div>

				<div id="nom-et-prenom">
					<div class="champ-a-remplir" id="div-nom">
						<div class="div-icone">
							<i class="icone"><img src="icons/homme-lambda.png"></i>
						</div>

						<div class="input" id="div-champ-nom">
							<input class="input-champ" type="text" name="nom" placeholder="Nom" required>
						</div>
					</div>

					<div class="champ-a-remplir" id="div-prenom">
						<div class="div-icone">
							<i class="icone"><img src="icons/homme-lambda.png"></i>
						</div>

						<div class="input" id="div-champ-prenom">
							<input class="input-champ" type="text" name="prenom" placeholder="Prénom" required>
						</div>
					</div>
				</div>

				<div id="mdp-et-verif">
					<div class="champ-a-remplir">
						<div class="div-icone">
							<i class="icone"><img src="icons/mdp.png"></i>
						</div>

						<div class="input">
							<input class="input-champ" type="password" name="mdp" placeholder="Mot de passe" required>
						</div>
					</div>

					<div class="champ-a-remplir">
						<div class="div-icone">
							<i class="icone"><img src="icons/verif-mdp.png"></i>
						</div>

						<div class="input">
							<input class="input-champ" type="password" name="verif-mdp" placeholder="Vérification mot de passe" required>
						</div>
					</div>
				</div>

				<div id="mail-et-verif">
					<div class="champ-a-remplir">
						<div class="div-icone">
							<i class="icone"><img src="icons/mail.png"></i>
						</div>

						<div class="input">
							<input class="input-champ" type="text" name="mail" placeholder="Adresse mail" required>
						</div>
					</div>

					<div class="champ-a-remplir">
						<div class="div-icone">
							<i class="icone"><img src="icons/verif-mail.png"></i>
						</div>

						<div class="input">
							<input class="input-champ" type="text" name="verif-mail" placeholder="Vérification adresse mail" required>
						</div>
					</div>
				</div>

				<div class="champ-a-remplir">
					<div class="div-icone">
						<i class="icone"><img src="icons/phone.png"></i>
					</div>

					<div class="input">
						<input class="input-champ" type="text" name="phone" placeholder="Numéro de téléphone" required>
					</div>
				</div>

				<div class="champ-a-remplir">
					<div class="div-icone">
						<i class="icone"><img src="icons/adresse.png"></i>
					</div>

					<div class="input">
						<input class="input-champ" type="text" name="adresse" placeholder="Adresse" required>
					</div>
				</div>

				<div class="champ-a-remplir" id="div-codepostal">
					<div class="div-icone">
						<i class="icone"><img src="icons/code-postal.png"></i>
					</div>

					<div class="input" id="div-champ-codepostal">
						<input class="input-champ" type="text" name="code-postal" placeholder="Code Postal" required>
					</div>
				</div>

				<div class="champ-a-remplir" id="div-ville">
					<div class="div-icone">
						<i class="icone"><img src="icons/ville.png"></i>
					</div>

					<div class="input" id="div-champ-ville">
						<input class="input-champ" type="text" name="ville" placeholder="Ville" required>
					</div>
				</div>

				<div class="champ-a-remplir" id="div-pays">
					<div class="div-icone">
						<i class="icone"><img src="icons/pays.png"></i>
					</div>

					<div class="input">
						<input class="input-champ" type="text" name="pays" placeholder="Pays" required>
					</div>
				</div>

				<div class="s-inscrire">
						<button type="submit" class="bouton-inscription" value="Submit" name="inscription">
							<span id="bouton-inscription">S'inscrire</span>
						</button>
				</div>

				<div class="icone-inscription">
					<img src="icons/confiance.png">
				</div>
			</form>
		</fieldset>







	</div>
</body>

<!-- Ajout du footer -->
<?php include('footer.php') ?>

</html>