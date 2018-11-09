<?php 
			
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

        			echo " <div class='estConnect'>
  								<span class='closebtn' onclick=\"this.parentElement.style.display='none';\">&times;</span>
  								Vous êtes bien connecté, vous pouvez retourner sur la page Produit !
							</div> "; 
    				}

				}
					else echo " <div class='alert'>
  								<span class='closebtn' onclick=\"this.parentElement.style.display='none';\">&times;</span>
  								Identifiant ou mot de passe incorrect
							</div> ";

			}
			} ?> 
			