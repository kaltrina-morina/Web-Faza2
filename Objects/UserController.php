<?php
    require_once ('Database.php');
    
    class UserController{
        public $db;

        public function __construct(){
            $this->db = new Database; 
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM user');
            return $query->fetchAll();      
        }
        public function insert($request){
            try{
                $query = $this->db->pdo->prepare('INSERT INTO user VALUES (:userName, :userSurname, :userDay, :userMonth, :userYear, :userGender, :userEmail, :userPassword, 0)');
                $query->bindParam(':userName', $request['userName']);
                $query->bindParam(':userSurname', $request['userSurname']);
                $query->bindParam(':userDay', $request['userDay']);
                $query->bindParam(':userMonth', $request['userMonth']);
                $query->bindParam(':userYear', $request['userYear']);
                $query->bindParam(':userGender', $request['userGender']);
                $query->bindParam(':userEmail', $request['userEmail']);
                $query->bindParam(':userPassword', $request['userPassword']);
                
                $query->execute();
                header('Location: ../Login/login.php');
            }catch(PDOException){
                echo "<script>alert(\"This email is already in use\");</script>";
            }
        }
        public function edit($userEmail){
            $query = $this->db->pdo->prepare('SELECT * from user WHERE userEmail = :userEmail');
            $query->bindParam(':userEmail', $userEmail);
            $query->execute();
    
            return $query->fetch();
        }
        public function update($request, $userEmail){
            $query = $this->db->pdo->prepare('UPDATE user SET userName=:userName, userSurname=:userSurname, userDay=:userDay, userMonth=:userMonth, userYear=:userYear, userGender=:userGender, userPassword=:userPassword, userRole=:userRole WHERE userEmail=:userEmail');
            $query->bindParam(':userName', $request['userName']);
            $query->bindParam(':userSurname', $request['userSurname']);
            $query->bindParam(':userDay', $request['userDay']);
            $query->bindParam(':userMonth', $request['userMonth']);
            $query->bindParam(':userYear', $request['userYear']);
            $query->bindParam(':userGender', $request['userGender']);
            $query->bindParam(':userEmail', $userEmail);
            $query->bindParam(':userPassword', $request['userPassword']);
            $query->bindParam(':userRole', $request['userRole']);
            $query->execute();
            header("Location:dashboard.php");
        }
        public function delete($userEmail){
            $query = $this->db->pdo->prepare('DELETE from user WHERE userEmail = :userEmail');
            $query->bindParam(':userEmail', $userEmail);
            $query->execute();
            header("Location:dashboard.php");
        }
    }
?>