<?php
    class Database{
        public $pdo;
        public function __construct(){
            try{
                if(!isset($_SESSION)){
                    session_start();
                }
                $link = new PDO('mysql:host=localhost;dbname=projektiweb', 'root','');
                $this->pdo = $link;
            }catch(PDOException $exception){
                die($exception->getMessage());
            }
        }
    }
?>