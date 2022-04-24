<?php include '../config.php' ?>
<?php require_once('../Objects/ProduktiController.php');
$produkti = new ProduktiController;
$allProducts = $produkti->readData();
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
     
    <?php include '../header/header.php'?>

    <section class="about" id="about">
        <div class="about-img">
            <img src="../img/kodi.jpg" alt="">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <h2>We help you to <br>Change The World</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet, placeat praesentium. Quas quis, omnis repellendus reiciendis eius fuga quidem eum illum veniam explicabo excepturi fugit distinctio sequi quisquam quaerat dignissimos! Beatae delectus numquam perspiciatis.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi ex aut repellat ipsum possimus delectus cum quaerat rerum?</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>

    <?php include '../footer/footer.php'?>
    
</body>
</html>