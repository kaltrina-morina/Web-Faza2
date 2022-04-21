<?php
session_start();
require '../Objects/User.php';
require '../Objects/UserController.php';
if(isset($_POST['loginButton'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(validateData($email,$password)){
        header("Location:../HomePage/index.php");
    }else{
        echo '<script>alert("Login failed: password or email is incorrect please try again")</script>';
    }
}
function validateData($email,$password){
    $useri = new UserController;
    $userat = $useri->readData();
    foreach($userat as $user){
        $userObject = new User($user['userName'], $user['userSurname'], $user['userDay'], $user['userMonth'], $user['userYear'], $user['userGender'], $user['userEmail'], $user['userPassword'], $user['userRole']);

        if($userObject->userEmail == $email && $userObject->userPassword == $password){
            $_SESSION['roli'] = $userObject->userRole;
            $_SESSION['aktiv']=true;
            $_SESSION['user']= $userObject->userEmail;
            return true;
        }
    }
    return false;
}