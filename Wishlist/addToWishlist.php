<?php
require_once('../Objects/WishlistController.php');
session_start();
if(!isset($_SESSION['user'])){
    echo '<script>window.location.href="../Login/login.php";
        alert("Please Log in before adding items to your wishlist!");</script>';
}else{
    $productName = $_GET['id'];
    $wishlist = new WishlistController;
    try{
        $wishlist->insert($productName);
        
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }catch(PDOException $pdoe){
        echo '<script>alert("Item is already in your Wishlist!");
        window.location.href="../Categories/categories.php";</script>';
    }

    
}
?>