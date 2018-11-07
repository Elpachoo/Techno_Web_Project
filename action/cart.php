<?php
                    if(isset($_POST['modif_quantity_action'])){
                              $truc=$_POST['modif_quantity'];
                              
                               $req = $bdd->prepare('UPDATE panier SET Quantite = :nvquantite WHERE id ='.$_SESSION['commandeid']);
                                $req->execute(array(
                                'nvquantite' => $truc                               
                                    ));
                              $req->closeCursor();
                              } ?>