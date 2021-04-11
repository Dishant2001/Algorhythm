<?php

session_start();
if(isset($_SESSION['User']))
  header('Location:index.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

    <div class="buttons">
      <button id="but1" onclick="startupform()">As a StartUp</button>
      <button id="but2" onclick="mentorform()">As a Mentor</button>
      <button id="but3" onclick="studentform()">As a Seeker</button>
    </div>

    <div class="startup-window" id="startup-window">
        <form action="startupdb.php" method="post">
        <!-- <div class="signin-left">
          <div class="signin-items">
            <button id="signin-google">Sign in with Google</button>
          </div>
        </div> -->
        <div class="signup-left">
          <div class="signup-items">
            <input name="email" type="email" id="email" placeholder="Start-Up Email" value="" required>
          </div>
          <div class="signup-items">
            <div id="confirm-password">
              <input name="confirm-password" type="password" id="confirm" placeholder="Confirm Password" onkeyup="pass_check()" required>
              <img id="alert">
            </div>
          </div>
          <div class="signup-items">
              <input name="startup-name" type="text" id="startup-name" placeholder="Start-Up Name" value="" required>
          </div>
          <div class="signup-items">
              <textarea name="s_address" id="s_address" placeholder="Address" cols="30" rows="10" required></textarea>
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
              <input name="phone" type="text" id="phone" placeholder="Telephone" value="" required>
          </div>
        </div>
        <div class="signup-right">
          <div class="signup-items">
            <input name="password" type="password" id="signup-password" placeholder="Password" onkeyup="pass_check()" required >
          </div>
          <div class="signup-items">
            <input type="file" id="startup-logo" placeholder="Start-Up Logo" name="startup-logo" value="" required>
          </div>
          <div class="signup-items">
              <input name="founder-name" type="text" id="founder-name" placeholder="Name of the Founder" value="">
          </div>
          <div class="signup-items">
            <textarea name="desc" id="desc" placeholder="Description and Moto" cols="30" rows="17" required></textarea>
          </div>
          <div class="signup-items">
              <input name="link" type="text" id="link" placeholder="LinkedIn Profile" value="">
          </div>
          <div class="signup-items tags">
            <!-- <input type="checkbox" name="address" id="check-address" value="true" onChange="address_check()">Billing Address same as Shipping Address</input> -->
            <!-- <select name="tag" id="tag"required> 
              <option value="none" selected>*Choose a Domain*</option>
              <option value="ai">AI Startups</option>
              <option value="ecomm">Ecommerce Startups</option>
              <option value="edtech">EdTech Startups</option>
              <option value="finteh">FinTech Startups</option>
              <option value="food">Food and Beverages Startups</option>
              <option value="health">Health Care Startups</option>
              <option value="blockchain">Blockchain Startups</option>
              <option value="iot">IoT Startups</option>
              <option value="software">Software and SaaS Startups</option>
              <option value="transport">Transport and Travel Startups</option>
              <option value="mobile">Mobile Apps Startups</option>
              <option value="fashion">Fashion Startups</option>
            </select> -->
            <h2 style="color:white;margin-top:0.em;margin-bottom:0.2em">Domain tags</h2>
             <div class="tag-items">
              <input type="checkbox" id="tag1" name="ai" value="AI"><span id='t1'>AI</span>
              <input type="checkbox" id="tag2" name="ecomm" value="ECommerce"><span id='t2'>ECommerce</span>
              <input type="checkbox" id="tag3" name="edtech" value="EdTech"><span id='t3'>EdTech</span>
             </div>
             <div class="tag-items">
              <input type="checkbox" id="tag4" name="fintech" value="FinTech"><span id='t4'>FinTech</span>
              <input type="checkbox" id="tag5" name="food" value="Food"><span id='t5'>Food</span>
              <input type="checkbox" id="tag6" name="health" value="Health"><span id='t6'>Health</span>
             </div>
             <div class="tag-items">
              <input type="checkbox" id="tag7" name="block" value="Blockchain"><span id='t7'>Blockchain</span>
              <input type="checkbox" id="tag8" name="iot" value="IOT"><span id='t8'>IOT</span>
              <input type="checkbox" id="tag9" name="soft" value="Software"><span id='t9'>Software</span>
             </div>
             <div class="tag-items">
              <input type="checkbox" id="tag10" name="transport" value="Transport"><span id='t10'>Transport</span>
              <input type="checkbox" id="tag11" name="mobile" value="Mobile App"><span id='t11'>Mobile App</span>
              <input type="checkbox" id="tag12" name="fashion" value="Fashion"><span id='t12'>Fashion</span>
             </div>
          </div>
        </div>
      </div>
      <div class="signup-items" id="signup-button">
          <input type="submit" value="Sign Up" id="signup1">
          </form>
      </div>
      <div class="mentor-window" id="mentor-window">
        <form action="mentordb.php" method="post">
        <!-- <div class="signin-left">
          <div class="signin-items">
            <button id="signin-google">Sign in with Google</button>
          </div>
        </div> -->
        <div class="signup-left">
          <div class="signup-items">
            <input type="text" placeholder="Email" name="email" id="email" required>
          </div>
          <div class="signup-items">
            <div id="confirm-password">
              <input name="confirm-password" type="password" id="confirm" placeholder="Confirm Password" onkeyup="pass_check()" required>
              <img id="alert">
            </div>
          </div>
          <div class="signup-items">
            <input type="text" name="first-name" id="fname" placeholder="First Name">
          </div>
          <div class="signup-items">
            <input type = "date" id="bdate" name="bdate" placeholder="DOB" required>
          </div>
          <div class="signup-items">
            <select name="gender" id="gender">
              <option value="none">*Gender*</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <div class="signup-items">
              <input name="phone" type="text" id="phone" placeholder="Telephone" value="" required>
          </div>
          <div class="signup-items tags">
            <!-- <input type="checkbox" name="address" id="check-address" value="true" onChange="address_check()">Billing Address same as Shipping Address</input> -->
            <!-- <select name="tag" id="tag"required> 
              <option value="none" selected>*Choose a Domain*</option>
              <option value="ai">AI Startups</option>
              <option value="ecomm">Ecommerce Startups</option>
              <option value="edtech">EdTech Startups</option>
              <option value="finteh">FinTech Startups</option>
              <option value="food">Food and Beverages Startups</option>
              <option value="health">Health Care Startups</option>
              <option value="blockchain">Blockchain Startups</option>
              <option value="iot">IoT Startups</option>
              <option value="software">Software and SaaS Startups</option>
              <option value="transport">Transport and Travel Startups</option>
              <option value="mobile">Mobile Apps Startups</option>
              <option value="fashion">Fashion Startups</option>
            </select> -->
            <h2 style="color:white;margin-top:0.2em;margin-bottom:0.2em">Domain tags</h2>
             <div class="tag-items">
              <input type="checkbox" id="tag1" name="ai" value="AI"><span id='t1'>AI</span>
              <input type="checkbox" id="tag2" name="ecomm" value="ECommerce"><span id='t2'>ECommerce</span>
              <input type="checkbox" id="tag3" name="edtech" value="EdTech"><span id='t3'>EdTech</span>
             </div>
             <div class="tag-items">
              <input type="checkbox" id="tag4" name="fintech" value="FinTech"><span id='t4'>FinTech</span>
              <input type="checkbox" id="tag5" name="food" value="Food"><span id='t5'>Food</span>
              <input type="checkbox" id="tag6" name="health" value="Health"><span id='t6'>Health</span>
             </div>
             <div class="tag-items">
              <input type="checkbox" id="tag7" name="block" value="Blockchain"><span id='t7'>Blockchain</span>
              <input type="checkbox" id="tag8" name="iot" value="IOT"><span id='t8'>IOT</span>
              <input type="checkbox" id="tag9" name="soft" value="Software"><span id='t9'>Software</span>
             </div>
             <div class="tag-items">
              <input type="checkbox" id="tag10" name="transport" value="Transport"><span id='t10'>Transport</span>
              <input type="checkbox" id="tag11" name="mobile" value="Mobile App"><span id='t11'>Mobile App</span>
              <input type="checkbox" id="tag12" name="fashion" value="Fashion"><span id='t12'>Fashion</span>
             </div>
          </div>
          <div class="signup-items hide" >
            <input name="phone" type="text" id="phone" value="" style="background-color:black;">
          </div>
        </div>
        <div class="signup-right">
          <div class="signup-items">
            <input name="password" type="password" id="signup-password" placeholder="Password" onkeyup="pass_check()" required >
          </div>
          <div class="signup-items">
            <input type="file" id="mentor-pic" placeholder="Profile Pic" name="mentor-pic" value="" required>
          </div>
          <div class="signup-items">
            <input type="text" id="lname" name="lastname" placeholder="Last Name">
          </div>
          <div class="signup-items">
            <textarea name="education" id="education" placeholder="Education Details" cols="30" rows="16" required></textarea>
          </div>
          <div class="signup-items">
            <input name="link" type="text" id="link" placeholder="LinkedIn Profile" value="">
          </div>
        </div>
      </div>
      <div class="signup-items" id="signup-button">
          <input type="submit" value="Sign Up" id="signup2">
          </form>
      </div>
      <div class="student-window" id="student-window">
        <form action="studentsdb.php" method="post">
        <!-- <div class="signin-left">
          <div class="signin-items">
            <button id="signin-google">Sign in with Google</button>
          </div>
        </div> -->
        <div class="signup-left">
          <div class="signup-items">
            <input type="text" placeholder="Email" name="email" id="email" required>
          </div>
          <div class="signup-items">
            <div id="confirm-password">
              <input name="confirm-password" type="password" id="confirm" placeholder="Confirm Password" onkeyup="pass_check()" required>
              <img id="alert">
            </div>
          </div>
          <div class="signup-items">
            <input type="text" name="first-name" id="fname" placeholder="First Name">
          </div>
          <div class="signup-items">
            <input type = "date" id="bdate" name="bdate" placeholder="DOB" required>
          </div>
          <div class="signup-items">
            <select name="gender" id="gender">
              <option value="none">*Gender*</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <div class="signup-items">
              <input name="phone" type="text" id="phone" placeholder="Telephone" value="" required>
          </div>
          <div class="signup-items">
            <input name="resume" type="file" id="resume" placeholder="Resume" value="" required>
          </div>
        </div>
        <div class="signup-right">
          <div class="signup-items">
            <input name="password" type="password" id="signup-password" placeholder="Password" onkeyup="pass_check()" required >
          </div>
          <div class="signup-items">
            <input type="file" id="student-pic" placeholder="Profile Pic" name="student-pic" value="" required>
          </div>
          <div class="signup-items">
            <input type="text" id="lname" name="lastname" placeholder="Last Name">
          </div>
          <div class="signup-items">
            <textarea name="bio" id="bio" placeholder="Bio.." cols="30" rows="7" required></textarea>
          </div>
          <div class="signup-items">
            <input name="link" type="text" id="link" placeholder="LinkedIn Profile" value="">
          </div>
        </div>
      </div>
      <div class="signup-items" id="signup-button">
          <input type="submit" value="Sign Up" id="signup3">
          </form>
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