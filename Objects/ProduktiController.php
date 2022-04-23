<?php
require_once('Database.php');   
class ProduktiController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function readData(){
        $query = $this->db->pdo->query('SELECT * FROM produkti');
        return $query->fetchAll();
    }
    public function insert($request){
        $request['imageLink'] = '../img/'.$request['imageLink'];
        $query = $this->db->pdo->prepare('INSERT INTO produkti(imageLink,productName,productDescription,productPrice,category) VALUES (:imageLink, :productName, :productDescription, :productPrice, :category)');
        $query->bindParam(':imageLink', $request['imageLink']);
        $query->bindParam(':productName', $request['productName']);
        $query->bindParam(':productDescription', $request['productDescription']);
        $query->bindParam(':productPrice', $request['productPrice']);
        $query->bindParam(':category', $request['category']);
        
        $query->execute();
        header("Location:../Dashboard/dashboard.php");
    }
    public function edit($productName){
        $query = $this->db->pdo->prepare('SELECT * from produkti WHERE productName = :productName');
        $query->bindParam(':productName', $productName);
        $query->execute();

        return $query->fetch();
    }
    public function update($request, $productName){
        $request['imageLink'] = '../img/'.$request['imageLink'];
        $query = $this->db->pdo->prepare('UPDATE produkti SET imageLink=:imageLink, productDescription=:productDescription, productPrice=:productPrice, category=:category WHERE productName=:productName');
        $query->bindParam(':imageLink', $request['imageLink']);
        $query->bindParam(':productDescription', $request['productDescription']);
        $query->bindParam(':productPrice', $request['productPrice']);
        $query->bindParam(':category', $request['category']);
        $query->bindParam(':productName', $productName);

        $query->execute();
        header("Location:../Dashboard/dashboard.php");
    }
    public function delete($productName){
        $query = $this->db->pdo->prepare('DELETE from produkti WHERE productName = :productName');
        $query2 = $this->db->pdo->query('ALTER TABLE produkti AUTO_INCREMENT = 1');
        $query->bindParam(':productName', $productName);
        $query->execute();
        $query2->execute();
        header("Location: ../Dashboard/dashboard.php");
    }
}
?>