<?php
    require_once ('Database.php');
    class WishlistController{
        public $db;
        
        public function __construct(){
            $this->db=new Database;
        }
        public function insert($productName){
            $query = $this->db->pdo->prepare('INSERT INTO wishlist(productName,userEmail) VALUES (:productName, :userEmail)');
            $query->bindParam(':productName', $productName);
            $query->bindParam(':userEmail', $_SESSION['user']);
            $query->execute();
        }
        public function delete($productName){
            $query = $this->db->pdo->prepare('DELETE FROM wishlist WHERE productName = :productName');
            $query->bindParam(':productName', $productName);
            $query->execute();
        }
        
        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM wishlist');
            return $query->fetchAll();
        }

        public function exists($productName){
            $allData = $this->readData();

            foreach($allData as $product){
                if($product['productName'] == $productName){
                    return true;
                }
            }
            return false;
        }
    }
?>