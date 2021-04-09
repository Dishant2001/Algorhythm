<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    <?php
      include 'signup.css'
    ?>
    </style>
</head>
<body>
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
    <div class="signup-window" id="signup-window">
        <form action="" method="post">
        <!-- <div class="signin-left">
          <div class="signin-items">
            <button id="signin-google">Sign in with Google</button>
          </div>
        </div> -->
        <div class="signup-left">
          <div class="signup-items">
            <input name="email" type="email" id="signup-email" placeholder="Email" value="" required>
          </div>
          <div class="signup-items">
            <div id="confirm-password">
              <input name="confirm-password" type="password" id="confirm" placeholder="Confirm Password" onkeyup="pass_check()" required>
              <img id="alert">
            </div>
          </div>
          <div class="signup-items">
              <input name="first-name" type="text" id="first-name" placeholder="First Name" value="" required>
          </div>
          <div class="signup-items">
              <textarea name="s_address" id="s_address" placeholder="Shipping Address" cols="30" rows="10" required></textarea>
          </div>
          
          <div class="signup-items">
              <input name="state" type="text" id="state" placeholder="State" value="" required>
          </div>
          <div class="signup-items">
              <input name="district" type="text" id="district" placeholder="District" value="" required>
          </div>
          <div class="signup-items">
              <input name="pincode" type="text" id="pincode" placeholder="PINCODE" value="" required>
          </div>
          <div class="signup-items">
              <input name="phone" type="text" id="phone" placeholder="Mobile No." value="" required>
          </div>
        </div>
        <div class="signup-right">
          <div class="signup-items">
            <input name="password" type="password" id="signup-password" placeholder="Password" onkeyup="pass_check()" required >
          </div>
          <div class="signup-items">
            <input type="text" id="country" placeholder="Country" name="country" value="" required>
          </div>
          <div class="signup-items">
              <input name="last-name" type="text" id="last-name" placeholder="Last Name" value="">
          </div>
          <div class="signup-items">
            <textarea name="b_address" id="b_address" placeholder="Billing Address" cols="30" rows="10" required></textarea>
          </div>
          <div class="signup-items" id="check-add">
            <input type="checkbox" name="address" id="check-address" value="true" onChange="address_check()">Billing Address same as Shipping Address</input>
          </div>
          <div class="signup-items">
            <input name="b_state" type="text" id="b_state" placeholder="State" value="">
          </div>
          <div class="signup-items">
            <input name="b_district" type="text" id="b_district" placeholder="District" value="" >
          </div>
          <div class="signup-items">
            <input name="b_pincode" type="text" id="b_pincode" placeholder="PINCODE" value="">
          </div>
        </div>
      </div>
      <div class="signup-items" id="signup-button">
          <input type="submit" value="Sign Up" id="signup">
          </form>
      </div>
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