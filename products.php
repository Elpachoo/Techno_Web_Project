<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Water Life</title>
    <link rel="stylesheet" href="css/products.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/fonts.css">

<body>
	<header> 
   <?php include('header.php'); ?>     
  </header>

  <div class="navSection">
    <nav>
       <ul>
        <li> <a href="#TitrePlate">Eaux Plates</a></li>
        <li> <a href="#TitreGazeuses">Eaux Gazeuses</a> </li>
        <li> <a href="#TitreSucree">Eaux Sucrées</a></li>
        <li> <a href="#TitreDeLuxe">Eaux de Luxe</a></li>
      </ul> 
    </nav>
        
    <section>
        
        <div id="container"> <!-- Contient 6 produits -->
          <div id="TitrePlate">
            <br><br><br>
            <h1>Eaux plates</h1>
            <br>
          </div>
          

          <div class="row">

            <div class="produit">
              <div class=image>
                <a href="productPage.php?produit=Volvic"><img src="pictures/volvic.png" alt="Product " />  </a>
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>
              </div>
              <h4> Volvic </h4>
              <div class="price"> 3.50€ </div>
              <!--
              <div class="panier"> <input class="bouton" type="button"value="Ajouter au panier"/> </div>
             -->
              <br>
            </div>

            <div class="produit">
              <div class=image>
                <a href="productPage.php?produit=Cristaline"><img src="pictures/cristaline.png" alt="Product" /> </a>
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>
              </div>
              <h4> Cristaline </h4>
              <div class="price"> 2.70€  <br> </div>
              <br>
            </div>

            <div class="produit">
              <div class=image> 
                <a href="productPage.php?produit=Evian"> <img src="pictures/evian.png" alt="Product" /> </a>
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>
              </div>
              <h4> Evian </h4>
              <div class="price"> 20€  <br> </div>
              <br>
            </div>

            <div class="produit">
              <div class=image>
                <a href="productPage.php?produit=Contrex"> <img src="pictures/contrex.png" alt="Product" /></a>
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>
              </div>     
              <h4> Contrex </h4>
              <div class="price"> 20€ </div> 
              <br>
            </div>


       		</div><!-- fin row1Plate -->

          <div class="row">
            <div class="produit">
              <div class=image>
                <a href="productPage.php?produit=Plancoet"><img src="pictures/plancoet2.png" alt="Product" /></a>
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>
              </div>
              <h4> Plancoet </h4>
              <div class="price"> 20€ </div>
              <br>
            </div>

             <div class="produit">
               <div class=image> 
                <a href="productPage.php?produit=Vittel"><img src="pictures/vittel.png" alt="Product" /></a>
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>
              </div>
              <h4> Vittel </h4>
              <div class="price"> 20€ </div>
              <br>
            </div>

            <div class="produit">
              <div class=image>
                <a href="productPage.php?produit=Hepar"><img src="pictures/hepart.png" alt="Product" /></a>
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>
              </div>
              <h4> Hepar </h4>
              <div class="price"> 20€ </div>
              <br>
            </div>    

          </div><!-- fin row2Plate -->
          <br><br>
        </div> <!-- fin containerPlates -->
  

        <div id="container"> <!-- Contient 3 produit= -->
          <div id="TitreGazeuses">
            <br><br><br>
            <h1>Eaux Gazeuses</h1>
            <br>
          </div>
          
          <div class="row">

            <div class="produit">
              <div class=image>
                <a href="productPage.php?produit=Perrier"><img src="pictures/perrier.png" alt="Product" /></a>
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>
                </div>
              <h4> Perrier </h4>
              <div class="price"> 20€ </div>
              <br>
            </div>
          
            <div class="produit">
              <div class=image>
                <a href="productPage.php?produit=Badoit"><img src="pictures/badoit.png" alt="Product" /></a>
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>
              </div>
              <h4> Badoit </h4>
              <div class="price"> 20€ </div>            
              <br>
            </div>
          
            <div class="produit">
              <div class=image>
                <a href="productPage.php?produit=Saint-Amand"><img src="pictures/saintamand.png" alt="Product"/></a>
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>
              </div>   
              <h4> Saint-Amand </h4>
              <div class="price"> 20€ </div>      
              <br><br>
            </div>

          </div> <!-- fin row -->
          <br><br>
        </div><!-- fin containerGazeuses -->



          
        <div id="container"> <!-- Contient 3 produits -->
          <div id="TitreSucree">
             <br><br><br>
            <h1>Eaux Sucrees</h1>
            <br>
          </div>
          
        
          <div class="row">

            <div class="produit">
              <div class=image> 
                <a href="productPage.php?produit=Volvic_Fraise"><img src="pictures/volvicfraise.png" alt="Product" /></a>
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>           
              </div>
              <h4> Volvic Fraise</h4>
              <div class="price"> 4€ </div>  
              <br>
            </div>
                    
            <div class="produit">
               <div class=image>
                <a href="productPage.php?produit=Volvic_Citron"><img src="pictures/volviccitron.png" alt="Product" /></a>
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>         
                </div>
              <h4> Volvic Citron</h4>
              <div class="price"> 4€ </div>           
              <br>
            </div>
                   
            <div class="produit">
              <div class=image>
                <a href="productPage.php?produit=Volvic"><img src="pictures/volvicthe.png" alt="Product" /></a> 
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>
               </div>
              <h4> Volvic The </h4>
              <div class="price"> 6€ </div>           
              <br>
            </div> 

          </div>  <!-- fin row -->
          <br><br>
        </div><!-- fin containerSucree -->


        <div id="container"> <!-- Contient 3 produit= -->
          <div id="TitreDeLuxe">
            <br><br>
            <h1>Eaux de Luxe</h1>
            <br>
          </div>
          
          <div class="row">

            <div class="produit">
               <div class=image>
                  <a href="productPage.php?produit=Gota"><img src="pictures/gota.png" alt="Product" /></a>
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>
                </div>
              <h4> Gota </h4>
              <div class="price"> 150€ </div>           
              <br>
            </div>
          
            <div class="produit">
              <div class=image>
                <a href="productPage.php?produit=Ice_Landic"> <img src="pictures/icelandic.png" alt="Product" /></a> 
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div>             
              </div>             
              <h4> Ice Landic </h4>
              <div class="price"> 179€ </div>             
              <br>
            </div>
          
            <div class="produit">
              <div class=image>
                <a href="productPage.php?produit=Bling_H2O"><img src="pictures/blingh2o.png" alt="Product" /></a> 
                <div class="legende"> Eau pure venant des montagnes, filtrée naturellement, prévelevée à la source </div> 
              </div> 
              <h4> Bling H2O </h4>
              <div class="price"> 70€ </div>              
              <br>
            </div>

          </div> <!-- fin row -->
          <br><br><br><br>
        </div><!-- fin container de luxe -->
      </section>
    </div> <!-- fin div navSection -->

  </body>
    <footer>
      <?php include('footer.php') ?> 
    </footer>
</html>
