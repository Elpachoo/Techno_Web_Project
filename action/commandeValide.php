<?php
				if(isset($_POST['validation_action'])){
					$tmp2 = $_POST['id_commande3'];
					$req= $bdd->prepare('DELETE FROM panier WHERE id_user = :id_user_recup');
					$req->execute(array(
					'id_user_recup' => $tmp2
					));
					$req->closeCursor();
				}
 ?>