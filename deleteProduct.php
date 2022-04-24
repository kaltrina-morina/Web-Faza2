<?php
require_once ('../Objects/ProduktiController.php');

if(isset($_GET['id'])){
    $productName = $_GET['id'];
}
$user = new ProduktiController;
$user->delete($productName);
?>