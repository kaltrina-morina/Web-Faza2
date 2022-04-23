<?php
require_once('Database.php');   
class ContactController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function readData(){
        $query = $this->db->pdo->query('SELECT * FROM `contact-data`');
        return $query->fetchAll();
    }

    public function insert($request){

            $query = $this->db->pdo->prepare('INSERT INTO `contact-data` VALUES (:firstname, :lastname, :email, :message)');
            $query->bindParam(':firstname', $request['firstname']);
            $query->bindParam(':lastname', $request['lastname']);
            $query->bindParam(':email', $request['email']);
            $query->bindParam(':message', $request['message']);
            
            $query->execute();
            header("Location:../Dashboard/dashboard.php");
        
    }
}
    
?>