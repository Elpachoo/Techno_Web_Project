<!DOCTYPE html>
<html>
<head>
    <title>Eat.com</title>
    <link rel="stylesheet" href="css/common.css" />
</head>
<body>
	<header>
		<?php include('header.php'); ?>
	</header>

    <div>
      <nav>
      <div class="menuCategory">
          <a href="search.php">Search</a>
      </div>
      <div class="menuCategory">
        
          <span class="navtitle">Recipe</span>
          <div class="withSeveralLinks">
            <a href="recipe.php?meat=chicken">Chicken</a>
            <a href="recipe.php?meat=beef">Beef</a>
        </div>
      </div>
      <div class="menuCategory">
          <a href="contact.php">Contact us</a>
      </div>
    </nav>
    </div>
    
    <section>
        
        <div class="containerPlates"> <!-- Contient 6 produits -->
          <h1 id="TitrePlate">Eaux plates</h1>

          <div class="row1Plates">
            <div class="produit1Plate">
              <img src="pictures/volvic.png" alt="Product" />
              <h4> Volvic </h4>
              <div class="price"> 20€ </div>
            </div>

            <div class="produit2Plate">
              <img src="pictures/cristalline.png" alt="Product" />
              <h4> Cristalline </h4>
              <div class="price"> 20€ </div>
            </div>
       		</div><!-- fin row1Plate -->

          <div class="row2Plates">
            <div class="produit3Plate">
              <img src="pictures/evian.png" alt="Product" />
              <h4> Evian </h4>
              <div class="price"> 20€ </div>
            </div>

            <div class="produit4Plate">
              <img src="pictures/volvic.png" alt="Product" />
              <h4> Ondine </h4>
              <div class="price"> 20€ </div>
            </div>
          </div><!-- fin row2Plate -->

          <div class="row5Plates">
            <div class="produit3Plate">
              <img src="pictures/volvic.png" alt="Product" />
              <h4> Evian </h4>
              <div class="price"> 20€ </div>
            </div>

            <div class="produit6Plate">
              <img src="pictures/volvic.png" alt="Product" />
              <h4> Ondine </h4>
              <div class="price"> 20€ </div>
            </div>
          </div><!-- fin row3Plate -->

        </div> <!-- fin containerPlates -->



        <div class="" ="containerGazeuses"> <!-- Contient 3 produit= -->
          <h1 id="TitreGazeuses">Eaux Gazeuses</h1>

          <div class="row1Gazeuses">
            <div class="produit1Gazeuse">
              <img src="pictures/volvic.png" alt="Product" />
              <h4> Perrier </h4>
              <div class="price"> 20€ </div>
            </div>
          </div>

          <div class="row2Gazeuses">
            <div class="produit2Gazeuse">
              <img src="pictures/volvic.png" alt="Product" />
              <h4> Badoit </h4>
              <div class="price"> 20€ </div>
            </div>
          </div>

          <div class="row3Gazeuses">
            <div class="produit3Gazeuse">
              <img src="pictures/volvic.png" alt="Product" />
              <h4> Saint-Amand </h4>
              <div class="price"> 20€ </div>
            </div>
          </div>
          
        </div><!-- fin containerGazeuses -->



        <div class="containerSucre"> <!-- Contient 3 produits -->
          <h1 id="TitreSucree">Eaux Sucrée</h1>

          <div class="row1Sucree">
            <div class="produit1sucree">
              <img src="pictures/volvic.png" alt="Product" />
              <h4> Volvic Fraise </h4>
              <div class="price"> 20€ </div>
            </div>
          </div>

          <div class="row2Sucree">
            <div class="produit2sucree">
              <img src="pictures/volvic.png" alt="Product" />
              <h4> Volvic Citron </h4>
              <div class="price"> 20€ </div>
            </div>
          </div>

          <div class="row3Sucree">
            <div class="produit3sucree">
              <img src="pictures/volvic.png" alt="Product" />
              <h4> Volvic Menthe </h4>
              <div class="price"> 20€ </div>
            </div>
          </div>
          
        </div><!-- fin containerSucree -->


    </section>




    <footer>
        <div><a href="http://www.cdiscount.fr">Visit Cdiscount Web site</a></div>
    </footer>
</body>
</html>
