<?php
session_start();
$logged=false;
if(isset($_SESSION['User'])){
  $logged=true;
}
else
  header('Location:login.php')

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="account.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    <?php
    include 'account.css'
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
    <div class="info-box">
          <!-- <img class="logo-2" src="logo.png" alt="not accessible" id="logo"> -->
          <h1>Account Details</h1>
      </div>
      <p id="alert"></p>
      <form action="account.php" method="post">
      <div class="info-cont" style="display:hidden">
        <div class="left-info-cont">
          <div class="info-box">
            <input type="text" id="first-name" name='first-name' value="" placeholder="First Name" required>
          </div>
          <div class="info-box">
            <input type="text" id="last-name" name='last-name' value="" placeholder="Last Name">
          </div>
          <div class="info-box">
            <input name="password" type="password" id="signup-password" onkeyup="pass_check()" placeholder="Password">
          </div>
          <div class="info-box">
              <textarea name="s_address" id="s_address" placeholder="Shipping Address" cols="30" rows="10" required></textarea>
          </div>
            <div class="info-box">
              <input name="state" type="text" id="state" placeholder="State" value=""required>
            </div>
            <div class="info-box">
              <input name="district" type="text" id="district" placeholder="District" value=""required>
            </div>
            <div class="info-box">
              <input name="pincode" type="text" id="pincode" placeholder="PINCODE" value="" required>
            </div>
          <div class="info-box">
              <input name="phone" type="text" id="phone" placeholder="Mobile No." value="" required>
          </div>
        </div>
        <div class="right-info-cont">
          <div class="info-box">
            <input name="email" type="email" id="signup-email" placeholder="Email" value="" readonly>
          </div>
          <div class="info-box">
            <input type="text" id="country" placeholder="Country" name="country" value="" required>
          </div>
          <div class="info-box">    
            <input name="confirm-password" type="password" id="confirm-password" onkeyup="pass_check()" placeholder="Confirm Password">
          </div>
          <div class="info-box">
            <textarea name="b_address" id="b_address" placeholder="Billing Address" cols="30" rows="10" required></textarea>
          </div>
          <div class="info-box" id="check-add">
              <input type="checkbox" name="address" id="check-address" value="true" onChange="address_check()">Same as Shipping Address</input>
          </div>
            <div class="info-box">
              <input name="b_state" type="text" id="b_state" placeholder="State" value=""required>
            </div>
            <div class="info-box">
              <input name="b_district" type="text" id="b_district" placeholder="District" value="" required>
            </div>
            <div class="info-box">
              <input name="b_pincode" type="text" id="b_pincode" placeholder="PINCODE" value=""required>
            </div>
              <!-- <input onChange="address_check()" type="checkbox" name="address" id="check-address" value="true" >Same as Shipping Address</input> -->
        </div>
      </div>
      <div class="info-box">
        <input id="save-button" type="submit" value="Update">
      </div>
    </form>
    <footer>
            <div class="footer" style="height:80px">
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