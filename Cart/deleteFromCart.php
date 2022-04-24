<?php
require_once ('../Objects/CartController.php');

if(isset($_GET['id'])){
    $productName = $_GET['id'];
}
$cart = new CartController;
$cart->delete($productName);
header('Location:'.$_SERVER['HTTP_REFERER']);
?>