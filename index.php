<?php
session_start();
$logged=false;
if(isset($_SESSION['User'])){
  $logged=true;
  if($_SESSION['id']=='startup')
    header('Location:students.php');
  else if($_SESSION['id']=='student')
    header('Location:startups.php');
  else if($_SESSION['id']=='mentor')
    header('Location:mentors.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Consortium Network</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      <?php
       include 'styles.css'
      ?>
    </style>
</head>
<body>
    <!-- <div class="main">
        <div class="navbar">
            <ul class="header">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">How it works?</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">SignUp</a></li>
            </ul>
        </div>
    </div> -->
    <header>
        <nav class="navbar">
        <div class="left-nav">
          <div class="nav-item logo-cont">
              <a href="index.php"><img class="logo" src="assets/logo.png" alt="Logo"></a>
          </div>
          <div class="nav-item search-item">
            <div class="search">
              <form action="" method="post">
                <input type="text" name="search" id="search-bar" placeholder="Search...">
                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
        </div>
        <div class="right-nav">
          <div class="nav-item"><a href="index.php">Home</a></div>
          <div class="nav-item"><a href="#">Features</a></div>
          <div class="nav-item"><a href="#">How it works?</a></div>
            <?php
            if($logged==TRUE)
            {
            ?>
          <div class="nav-item">
            <a href="account.php">My Account</a>
          </div>
          <div class="nav-item">
            <a href="logout.php">Logout</a>
          </div>
          <?php 
          }
          else
          {
          ?>
          <div class="nav-item"><a href="login.php">Login</a></div>
          <div class="nav-item"><a href="signup.php">Sign Up</a></div>
          <?php }?>
        </div>
        </nav>
        <nav class="navbar2">
        <div class="left-nav">
          <div class="nav-item">
            <div class="drop-icon" onclick="expand()">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                    <!-- <div class="bar"></div> -->
            </div>
            <div class="dropdown" id="dropdown">
              <div class="nav-item"><a href="index.php">Home</a></div>
              <div class="nav-item"><a href="#">Features</a></div>
              <div class="nav-item"><a href="#">How it works?</a></div>
              <div class="nav-item"><a href="login.php">Login</a></div>
              <div class="nav-item"><a href="signup.php">Sign Up</a></div>
            </div>
          </div>
          <div class="nav-item">
              <a href="index.php"><img src="" alt="Logo"></a>
          </div>
        </div>
        <div class="right-nav">
          <div class="nav-item search-item">
            <div class="search">
              <form action="" method="post">
                <input type="text" name="search" id="search-bar" placeholder="Search...">
                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
        </div>
        </nav>
    </header>
    <div class="logo3">
        <a href="index.php"><img src="assets/logo.png" alt="Logo"></a>
    </div>
    <div class="image">
        <img src="assets/startup.jpeg" alt="">
    </div>
    <div class="body1"><p>Recent studies show that more than 20% of startups fail in their early stages.
      A major reason for this is lack of knowledge about the market and lack of mentorship.
      We at The Consortium Network have tried to solve this problem and provide you with an environment to engage with learned mentors and passionate students who wish to learn and work with startups 
    </p></div>
    <div class="features">
        <h1>Features</h1>
        <div class="f1" style="margin-bottom:5em;">
            <div class="column">
            <h3>Tracks startups</h3>
            <p>Keeps track on startups </p>
            </div>
            <div class="column">
            <h3>Networking with some like minded people</h3>
            <p>Different startups can interact with like minded people. </p>
            </div>
            <div class="column">
            <h3>Mentoring of startups</h3>
            <p>Our website provides mentoring to enthusiastic students and potential startups</p>
            </div>
        </div>
    </div>
        <footer>
            <div class="footer" style="height:80px;margin-top:5em;">
              <div class="foot-items">
                <h2>Customer Care</h2>
                <ul style="list-style:none">
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
              <div class="foot-items">
                <h2>About Us</h2>
                <div class="about"><a href="about.php" style="color: blue;">Check here</a></div>
              </div>
              <div class="foot-items">
                <h2>Connect With Us</h2>
                <a class="active" href="#"><i class="fa fa-home"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </footer>


</body>
<script>
  <?php
  include 'main.js';
  ?>
</script>
</html>