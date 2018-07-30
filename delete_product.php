<?php
//Connexion à la base de données
require_once "connexion.php";
//Requete la base de données
$request = $bdd->query("SELECT id, name FROM product");

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
   <h2>Supprimer un produit</h2>
   <ul>
   <?php
   //Affiche les produits récupérés en BDD
    foreach ($products as $key => $product) {
      echo "<li>" . $product["name"] . "</li>";
   ?>
    <form action="delete_product_post.php" method="post">
      <input type="hidden" name="id" value=<?php echo $product["id"]; ?>>
      <input type="submit" value="Supprimer">
    </form>
    <?php
      }
    ?>
    </ul>
 </main>
 <!-- Footer loading -->
 <?php
   require "template/footer.php";
  ?>
