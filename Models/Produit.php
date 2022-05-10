<?php
      require_once('./config/database.php');
      class Produit 
      {
          private $conn = null;
  
          public function __construct(){
              $this->conn = new Database();
              $this->conn = $this->conn->getmyDB();
          }

          public function getAllProduits($searchQuery){
            $query = (isset($searchQuery) || isset($idQuery)) ? 
             "SELECT * FROM produit WHERE designation LIKE '%$searchQuery%'" :
             "SELECT * FROM produit" ;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $datas =$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $datas;
        }
        public function ajoutProduit($data){
            
          $stmt = $this->conn->prepare("INSERT
          INTO produit (designation,
          prix, quantite,categorie)
           VALUES (:designation, :prix,
          :quantite,:categorie)");

          $stmt->bindParam(':designation', $data['designation']);
          $stmt->bindParam(':prix', $data['prix']);
          $stmt->bindParam(':quantite', $data['quantite']);
          $stmt->bindParam(':categorie', $data['categorie']);
         
          if ($stmt->execute()) {
              return true;
          } else {
              return false;
          }       
      }
        
      }

?>