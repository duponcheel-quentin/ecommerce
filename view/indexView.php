      <?php
      //Requete la base de données
      $request = $bdd->query("SELECT * FROM product");

      //Extraction des informations
      $products = $request->fetchall(PDO::FETCH_ASSOC);
       ?>

      <!-- Template loading -->
      <?php
        require "template/nav.php";
        require "template/header.php";
       ?>

       <!-- Main Content -->
       <main class="container my-5">
         <h2>Accueil</h2>
         <?php
         //Affiche les produits récupérés en BDD

            foreach ($products as $key => $product) {
              echo "<article>
                <h3>" . $product["name"] . "</h3>
                <p>" . $product["price"] . "</p>";
                if($product["stock"]){
                  echo "<p>Disponible</p>";
                }
                else {
                  echo "<p>Indisponible</p>";
                }
                //On crée un lien qui transfère l'id de l'objet vers single.php
              echo "<a href='single.php?id=" . $product['id'] . "'>Voir le produit</a></article>";
            }
          ?>
       </main>
       <!-- Footer loading -->
       <?php
         require "template/footer.php";
        ?>
