<?php
 // si formulaire soumis
    						$truc = !empty($_POST['quantity']) ? $_POST['quantity'] : NULL;
    						$_SESSION['quantity_choice']=$truc;
    						$req = $bdd->prepare('INSERT INTO panier(id_user, Marque, Quantite, Prix, Type, Materiau) VALUES(:id_user, :Marque, :Quantite, :Prix, :Type, :Materiau)');
							$req->execute(array(
							'id_user' => $_SESSION['id_user'],
							'Marque' => $_SESSION['marque'],
							'Quantite' => $_SESSION['quantity_choice'],
							'Prix' => $_SESSION['prix'],
							'Type' => $_SESSION['type'],
							'Materiau' => $_SESSION['materiau']
									));        			

    					
    					$req->closeCursor();
    					?>