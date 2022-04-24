<?php
require_once ('../Objects/UserController.php');

if(isset($_GET['id'])){
    $userEmail = $_GET['id'];
}
$user = new UserController;
$user->delete($userEmail);
?>