  <!-- Navbar -->
  <header>
        <a href="../HomePage/index.php" class="logo"><h3>Mo<span>Re.</span></h3></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="../HomePage/index.php">Home</a></li>
            <li><a href="../HomePage/about.php">About Us</a></li>
            <li><a href="../Categories/categories.php">Courses</a></li>
            <li><a href="../HomePage/skills.php">Skills</a></li>
           <!-- <li><a href="../HTML/contact.php">Contact</a></li> -->
           <?php if(isset($_SESSION['aktiv']) && $_SESSION['aktiv']==true){?>
           <li> <a href="..\Login\logout.php" id="button">Logout</a></li>
        <?php }else{?>
          <li>  <a href="../Login/login.php">Log In</a></li>
        <?php }?>
        <?php if(isset($_SESSION['roli']) && $_SESSION['roli']==1){?>
       <li> <a href="..\Dashboard\dashboard.php" id="button">Dashboard</a></li>
        <?php }?>
           
        </ul>
    </header>