<?php include '../config.php'?>
<?php require_once ('../Objects/Produkti.php')?>
<?php require_once ('../Objects/ProduktiController.php');
$produktet = new ProduktiController;
$allProducts = $produktet->readData();?>
<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
    <link rel="stylesheet" href="../css/categoriesStyle.css?v=<?=$version?>">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    
<?php include '../header/header.php'?>
    <div id="categMain">
       
        <div id="rightSide">
            <?php
                foreach($allProducts as $product){
                    $produkti = new Produkti($product['indicator'], $product['imageLink'], $product['productName'], $product['productDescription'], $product['productPrice'], $product['category']);
                    echo $produkti;
                }
            ?>
        </div>
    </div>
    <?php include '../footer/footer.php'?>

</body>
</html>