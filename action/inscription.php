<?php
		// si l'utilisateur appuie sur le bouton nommé "connexion" :
			
			if(isset($_POST['inscription_action']))
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

			$req = $bdd->query('SELECT Login from user');
			while($donnees=$req->fetch())
			{


				if($login == $donnees['Login'])
				{
					$flag=false;
				}

				else
				{
					$flag=true;
				}
			} 
			$req->closeCursor();


			// si les champs sont remplis alors :
			if($login && $nom && $prenom && $mdp && $verifmdp && $mail && $verifmail && $phone && $adresse && $codepostal && $ville && $pays && $flag)
			{
				// on se connecte à MySql
 // On se connecte à MySQL

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
							
							echo "yes bien inscrit le sang";
				}
				

				else echo " <div class='alert'>
  								<span class='closebtn' onclick=\"this.parentElement.style.display='none';\">&times;</span>
  								Remplissez tous les champs s'il vous plaît !<br> Si ceux-ci sont bien remplis, l'inscription a échoué car votre Login est déja utilisé, veuillez en choisir un autre s'il vous plaît !
							</div> ";
			$req->closeCursor();

		
	}
	?>