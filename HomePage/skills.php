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
    <title>Skills</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/slider.css">
</head>
<body>

    <?php include '../header/header.php'?>

    <section class="our-team">
        <div class="heading">
            <span>WHO WE ARE</span>
            <h2>Meet Our Team</h2>
        </div>
    <div class="slideshow-container">

        <div class="mySlides fade">
          <img src="../img/Timi.jpg" style="width: 100%; height: 37rem;">
          <div class="team2">
            <br> <br>
            <span><h3>TIM COOK</h3></span>
            <h3>CEO - Principal & Design Developer</h3> <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Perspiciatis vel! Fugiat,
                numquam dolore? Molestiae harum doloribus adipisci <br> nisi tempora  mollitia itaque 
                repellat voluptatibus consequatur corporis</p>
        </div>
        </div>
        
        <div class="mySlides fade">
          <img src="../img/safra.jfif" style="width: 100%; height: 37rem;">
          <div class="team1">
            <br> <br>
            <span><h3>SAFRA CATZ</h3></span>
            <h3>CEO - Principal & Creative Director</h3> <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
                 numquam dolore? Molestiae harum doloribus adipisci nisi tempora mollitia itaque 
                 repellat voluptatibus consequatur corporis,
                 praesentium corrupti natus maxime inventore incidunt dicta.
                 Perspiciatis vel!</p>
        </div>
        </div>
        
        <div class="mySlides fade">
          <img src="../img/elon.jpeg" style="width: 100%; height: 37rem;">
          <div class="team3">
            <br> <br>
            <span><h3> ELON MUSK</h3></span>
            <h3>CEO - Arificial Intellegence Manager</h3> <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Perspiciatis vel! Fugiat,
                numquam dolore? Molestiae harum doloribus adipisci <br> nisi tempora  mollitia itaque 
                repellat voluptatibus consequatur corporis</p>
        </div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
    </section>
    <section class="skills">
        <div class="heading">
            <span>WHAT WE KNOW</span>
            <h2>Our Skills</h2>
        </div>

        <div class="skills-content">
            <div class="column left">
                <h2>Our creative skills & experineces</h2> <br>
                <p>Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Possimus fugit quae, quis ad
                      vel dolor. Vero molestias illum voluptatem, 
                      molestiae cumque, aspernatur repellendus, 
                    animi id sunt ipsam accusantium culpa impedit.</p> <br>
                    <div >
                        <button class="btn-C">READ MORE</button>
                    </div>
            </div> 
            <div class="column right">
                <div class="bars">
                    <div class="inf">
                        <span>HTML / CSS</span>
                        <span>90%</span>
                    </div>
                    <div class="line html"></div>
                </div>
                <div class="bars">
                    <div class="inf">
                        <span>JavaScript</span>
                        <span>80%</span>
                    </div>
                    <div class="line js"></div>
                </div>
                <div class="bars">
                    <div class="inf">
                        <span>Python</span>
                        <span>70%</span>
                    </div>
                    <div class="line python"></div>
                </div>
                
                <div class="bars">
                    <div class="inf">
                        <span>Java</span>
                        <span>85%</span>
                    </div>
                    <div class="line java"></div>
                </div>
                <div class="bars">
                    <div class="inf">
                        <span>C++</span>
                        <span>80%</span>
                    </div>
                    <div class="line cplus"></div>
                </div>
            </div>
        </div>
    </section>
    

    <?php include '../footer/footer.php'?>

    <script>
    var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }</script>
</body>
</html>