<?php
require_once('../Objects/CartController.php');
session_start();
if(!isset($_SESSION['user'])){
    echo '<script>window.location.href="../Login/login.php";
        alert("Please Log in before adding items to your cart!");</script>';
}else{
    $productName = $_GET['id'];
    $cart = new CartController;
    try{
        $cart->insert($productName);
        
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }catch(PDOException $pdoe){
        echo '<script>alert("Item is already in your Cart!");
        window.location.href="../Categories/categories.php";</script>';
    }
}
?>