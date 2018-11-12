<?php 
			function bandeau_informations()
			{
				$message_bandeau = "";

				if(isset($_POST['connexion_action']))
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
							if ($row = $res->fetch_assoc()) 
							{
			        			$_SESSION['login'] = $row['Login'];
			        			$_SESSION['id_user'] = $row['Id'];

			        			header("Location:index.php?page=monCompte");

			        			$message_bandeau = " <div class='estConnect'>
			  								<span class='closebtn' onclick=\"this.parentElement.style.display='none';\">&times;</span>
			  								Vous êtes bien connecté bien connecté !
											</div> "; 
		    				}
						}

						else 
						{ 
							$message_bandeau = " <div class='alert'>
	  								<span class='closebtn' onclick=\"this.parentElement.style.display='none';\">&times;</span>
	  								Identifiant ou mot de passe incorrect
								</div> ";
						}
					}
				} 

				return $message_bandeau;
		}
?> 

			