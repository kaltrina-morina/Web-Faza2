<?php include '../config.php' ?>
<?php require_once('../Objects/kontakti.php');
require_once('../Objects/ContactController.php');
$kontakti = new ContactController;
$allContacts = $kontakti->readData();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
   
<?php include '../header/header.php'?>


    <section class="contact">
        <div class="heading">
            <span>GET IN TOUCH</span>
            <h2>Contact Now</h2>
        </div>
        <div class="contact-content">
        <div class="in-touch">
            <h2>Get in Touch</h2> <br>
            <p>Lorem ipsum dolor sit amet consectetur
                 adipisicing elit. Possimus fugit quae, quis ad
                  vel dolor. Vero molestias illum voluptatem, 
                  molestiae cumque, aspernatur repellendus, 
                animi id sunt ipsam accusantium culpa impedit.</p>
        </div>
        <div>
            <form action="contactProcess.php" class="form-content" id="form-content" method="POST">
                <h2>Message Us</h2>
                <div class="info1">
                    <input type="text" name="firstname" placeholder="Name" id="emri" required>
                    <input type="text" name="lastname" placeholder="Last Name" id="mbiemri" required>
                </div>
                <div class="info2"> 
                    <input type="email" name="email" placeholder="Email" id="imella" required><br>
                </div>
                <div class="textarea">
                <textarea placeholder="Message..." cols="30" rows="10"  name="message" required></textarea> <br>
                </div>
                <div >
                    <button class="btn-C">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    </section>
   
    <?php include '../footer/footer.php' ?>

</body>
</html>
