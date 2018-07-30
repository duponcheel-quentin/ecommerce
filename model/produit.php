<?php  

//recupere l'enssemble des produits en BDD
function getProducts($bdd) {
	//Requete la base de données
      $request = $bdd->query("SELECT * FROM product");

      //Extraction des informations
      $products = $request->fetchall(PDO::FETCH_ASSOC);
      return $products;
}

//recupere un produit
function getProduct() {
      
}

//Supprime un produit
function deleteProduct() {

}

//Enregistre un produit
function insertProduct() {

}

?>