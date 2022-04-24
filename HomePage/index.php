<?php include '../config.php' ?>
<?php require_once('../Objects/ProduktiController.php');
$produkti = new ProduktiController;
$allProducts = $produkti->readData();
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>MoRe</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="homeStyle.css?v=<?=$version?>">
</head>
<body>

<!-- Kodi i Header me php -->
    <?php include '../header/header.php'?>

    <section class="home" id="home">
        <div class="home-text">
            <h1><Span>MoRe </Span>Academy <br>
                 Where Knowledge is <span>Achived</span>
                </h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Dolores veritatis ad blanditiis molestias sunt aspernatur.</p>
            <a href="../register/register.php" class="btn">Register now</a>
        </div>
    </section>

<!-- Kodi i Footer me php -->
    <?php include '../footer/footer.php' ?>
    
    <script src="../js/main.js"></script>
</body>
</html>