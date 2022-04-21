<?php include '../config.php' ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/loginStyle.css?v=<?=$version?>">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include '../header/header.php'?>
    <div id="mainPage">
    <div id="korniza">
        <form class="box" action="loginValidation.php" method="post">
            <h1>Log In</h1>
    
            <input type="email" required autocomplete="off" id="email" name="email" placeholder="E-mail">
            <input type="password" required autocomplete="off" id="password" name="password" placeholder="Password">
           

            <input type="submit" id="loginButton" name="loginButton" value="Log in">

        </form>
    </div>
    <div id="signUp">
        <div id="signBox">
            <p>Don't have an account? <a href="../Register/register.php">Register here</a></p>
        </div>
    </div>
    </div>
    <?php include '../footer/footer.php'?>
    <script src="main.js"></script>
</body>
</html>