<?php include '../config.php' ?>
<?php require_once '../Objects/ProduktiController.php';

$product = new ProduktiController;
if(isset($_POST['submit'])){
    $product->insert($_POST);
}?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/createProductStyle.css?v=<?=$version?>">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include '../header/header.php'?>
    <div id="mainPage">
    <div id="korniza">
        <form class="box" method="POST">
            <h1>New Product</h1>
            <input type="file" id="imageLink" name="imageLink" accept="image/*">
            <input type="text" id="productName" name="productName" placeholder="productName">
            <textarea name="productDescription" id="productDescription"></textarea>
            <div id="priceCategory">
                <input type="text" id="productPrice" name="productPrice" placeholder="price">
                <select name="category" id="category">
                    <option value="Courses">Courses</option>
                </select>
            </div>
            
            <button type="submit" name="submit" id="loginButton">
                    <div><b>Create</b></div>
            </button>
        </form>
    </div>
</div>
    <?php include '../footer/footer.php'?>
</body>
</html>