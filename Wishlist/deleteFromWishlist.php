<?php
require_once ('../Objects/WishlistController.php');

if(isset($_GET['id'])){
    $productName = $_GET['id'];
}
$wishlist = new WishlistController;
$wishlist->delete($productName);
header('Location: '.$_SERVER['HTTP_REFERER']);
?>