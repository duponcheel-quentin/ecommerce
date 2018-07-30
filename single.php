<?php
  //Récupère les données dans l'URL
  $id = $_GET["id"];

  //Connexion base de donnée
  require_once "connexion.php";

  //Requete de la base de données
  $request = $bdd->prepare("SELECT * FROM product WHERE id = ? ");
  $request->execute([$id]);
  //Extrait les données
  $product = $request->fetch(PDO::FETCH_ASSOC);
 ?>

<!-- Template loading -->
<?php
  require "template/nav.php";
  require "template/header.php";
 ?>
 <!-- Main Content -->
 <main class="container my-5">
   <h2><?php echo $product["name"]; ?></h2>
   <p><?php echo $product["description"]; ?></p>
 </main>

 <!-- Footer loading -->
 <?php
   require "template/footer.php";
  ?>
