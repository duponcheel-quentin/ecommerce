<?php
//Connexion à la base de données
require_once "connexion.php";

//Requete en base de données
$request = $bdd->prepare("INSERT INTO product(name, price, stock, description, category, madein) VALUES(:name, :price, :stock, :description, :category, :madein)");
$request->execute([
  "name" => $_POST["name"],
  "price" => $_POST["price"],
  "stock" => $_POST["stock"],
  "description" => $_POST["description"],
  "category" => $_POST["category"],
  "madein" => $_POST["madein"]
]);
//Redirige l'utilisateur*
header("Location: add_product.php");

 ?>
