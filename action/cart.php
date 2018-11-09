<?php
                    if(isset($_POST['modif_quantity_action'])){
                              $truc=$_POST['modif_quantity'];
                              $cequejeveux=$_POST['id_commande'];
                              
                               $req = $bdd->prepare('UPDATE panier SET Quantite = :nvquantite WHERE id = :idcommande');
                                $req->execute(array(
                                'nvquantite' => $truc, 'idcommande' => $cequejeveux                               
                                    ));
                              $req->closeCursor();
                              } ?>