<?php
session_start();
if(isset($_SESSION['User']))
  header('Location:index.php');
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "algorhythm";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

if(isset($_POST['email'])&&isset($_POST['password']))
{
  $email=htmlentities($_POST['email']);
  $pass=htmlentities($_POST['password']);
  $query1="SELECT * FROM `startup_details` WHERE `email_id`='$email' AND `passward`='$pass'";
  $query2="SELECT * FROM `students_details` WHERE `email_id`='$email' AND `passward`='$pass'";
  $query3="SELECT * FROM `mentor_details` WHERE `email_id`='$email' AND `passward`='$pass'";
  $result1=$con->query($query1);
  $result2=$con->query($query2);
  $result3=$con->query($query3);
  if($result1->num_rows>0)
  {
    $_SESSION['id']='startup';
    $_SESSION['User']=$email;
    echo $_SESSION['User'];
    
    header('Location: students.php');
  }
  else if($result2->num_rows>0)
  {
    $_SESSION['id']='student';
    $_SESSION['User']=$email;
    echo $_SESSION['User'];
    header('Location: startups.php');
  }
  else if($result3->num_rows>0)
  {
    $_SESSION['id']='mentor';
    $_SESSION['User']=$email;
    echo $_SESSION['User'];
    header('Location: mentors.php');
  }
  else 
  {
    echo "Login Failed!";
    $valid_login=false;
  }
  
}


?>



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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>
    <?php
    include 'login.css';
    ?>
    </style>
</head>
<body>
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
    <div class="signin-window" id="signin-window">
        <div class="signin-left">
          <div class="signin-items">
            <img class="logo-2" src="assets/logo.png" alt="Logo Here" id="logo">
          </div>
          <form action="" method="post">
            <div class="signin-items">
              <input name="email" type="email" id="email" placeholder="Email">
            </div>
            <div class="signin-items">
              <input name="password" type="password" id="password" placeholder="Password">
            </div>
            <div class="signin-items"><a href="#" class="forgot-pass">Forgot Password?</a></div>
            <div class="signin-items">
              <input type="submit" value="Log In" id="signin">
            </div>
          </form>
          </div>
          <div class="signin-right">
            <div class="signin-items">
              <h3>New Member?</h3>
            </div>
            <div class="signin-items">
              <h6 class="quote">Have an Idea, Looking for Guidance?</h6>
            </div>
            <div class="signin-itemms">
              <ul>
              </ul>
            </div>
            <div class="signin-items"><a class="signup-link" href="signup.php" style="color:white;">Create an Account</a></div>
          </div>
        </div>
      </div>
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