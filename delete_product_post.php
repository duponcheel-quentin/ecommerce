<?php
//Connexion à la base de donnée
require_once "connexion.php";
//Suppression des données
$request = $bdd->prepare("DELETE FROM product WHERE id= ?");
$request->execute([$_POST["id"]]);
//Redirige l'utilisateur
header("Location: delete_product.php");
 ?>
