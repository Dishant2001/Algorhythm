<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    <?php
      include 'contact.css'
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
          <div class="nav-item">
              <a href="index.php"><img src="" alt="Logo"></a>
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
          <div class="nav-item"><a href="login.php">Login</a></div>
          <div class="nav-item"><a href="signup.php">Sign Up</a></div>
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
        <h2 class="heading">Leave Us A Message</h2>
        <form action="" method="POST">
          <div class="main-box">
            <div class="left-box">
              <div class="input-item">
                <input type="text" id="fname" name="firstname" placeholder="First Name">
              </div>
              <div class="input-item">
                <input type="text" id="lname" name="lastname" placeholder="Last Name">
              </div>
              <div class="input-item">
                <select id="country" name="country">
                  <option value="australia">Australia</option>
                  <option value="canada">Canada</option>
                  <option value="india" selected>India</option>
                  <option value="usa">USA</option>
                </select>
              </div>
            </div>
            <div class="right-box">
              <div class="input-item">
                <input type="email" name="email" id="email" placeholder="Email">
              </div>
              <div class="input-item">
                <textarea id="subject" name="subject" placeholder="Feedback..." style="height:120px"></textarea>
              </div>
            </div>
          </div>
          <div class="input-item">
            <input id="submit-btn" type="submit" value="Submit">
          </div>
        </form>
        <footer>
          <div class="footer">
            <div class="foot-items">
              <h2>Customer Care</h2>
              <ul>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Policies</a></li>
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
