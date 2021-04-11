<?php
session_start();
$logged=false;
if(isset($_SESSION['User'])){
  $logged=true;


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
else{
$query1="SELECT * FROM `students_details` WHERE `email_id` =(SELECT `std_email_id` FROM `student_startup`)";
$query2="SELECT * FROM `mentor_details`";
$result1=$con->query($query1);
$result2=$con->query($query2);
}
}
else
header('Location:login.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentors and Student Applications</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
    <style>
      <?php
       include 'students.css'
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
    <!-- <div class="main-box">
      <?php/*
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $id= $row["s_id"];;
              $name= $row["sname"] ;
              $founder= $row["founder"];
              $desc= $row["description"];
              $logo= $row["logo"];
              $tag= $row["domain_tags"];
              $email=$row["email_id"];
              $phone=$row["mobile_no"];
              $state=$row["state"];
              $district=$row["district"];
              $pincode=$row["pincode"];
              $link= $row["linkedin_url"];*/
              ?>
              <div class="info-cont">
                <div class="info-left">
                    <img src="<?php $logo?>" alt="Unavailable">
                </div>
                <div class="info-right">
                    <div class="info-right-item"><?php echo $name?></div>
                    <div class="info-right-item"><?php echo "Founder: ".$founder?></div>
                    <div class="info-right-item"><?php echo $desc?></div>
                    <div class="info-right-item"><?php echo $email?></div>
                    <div class="info-right-item"><?php echo $phone?></div>
                    <div class="info-right-item"><?php echo $state?></div>
                    <div class="info-right-item"><?php echo $district?></div>
                    <div class="info-right-item"><?php echo $pincode?></div>
                    <div class="info-right-item"><?php echo "LinkedIn: ".$link?></div>
                    <div class="info-right-item">
                      <form action="startup.php?<?php $name ?>" method="get"> <input id="view" type="submit" value="View"></form>
                      <form action="apply.php" method="post"> <input id="apply" type="submit" value="Apply"></form>
                    </div>
                </div>
              </div>
              <?php/*

            }
          }*/
          ?>
    </div> -->
    <div class="buttons">
      <button id="but1" onclick="mentorview()">See Mentors</button>
      <button id="but2" onclick="studentview()">See Student Applications</button>
    </div>
    <div class="row justify-content-center" style="margin-top: 5em;">
                <table class="table" id="mentor" style="width:80%;">
                    <thead style="color:white;font-weight:bolder;">
                        <tr>
                            <th>Name</th>
                            <th>Educational Details</th>
                            <th>LinkedIn</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                
            <?php
                while($row=$result2->fetch_assoc()): ?>
                    <tr>
                        <td style="color:white;"><?php echo $row['m_name']; ?></td>
                        <td style="color:white;"><?php echo $row['educational_details']; ?></td>
                        <td style="color:white;"><?php echo $row['linkedin_url']; ?></td>
                        <td style="color:white;"><a href="request.php?id=<?php echo $row['email_id'] ?>"
                                class="btn btn-info">Request Mentorship</a></td>
                    
                            <!-- <a href="process.php?delete=<?php echo $row['email_id']; ?>"
                                class="btn btn-danger">Delete</a> -->
                    </tr>
                <?php endwhile; ?>
                </table>
      </div>
      <div class="row justify-content-center" style="margin-top: 2em;">
                <table class="table" id="applicants" style="width:80%;display:none;">
                    <thead style="color:white;font-weight:bolder;">
                        <tr>
                            <th>Name</th>
                            <th>Resume</th>
                            <th>LinkedIn</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                
            <?php
            if($result1&&$result1->num_rows>0)
                while($row=$result1->fetch_assoc()): ?>
                    <tr>
                        <td style="color:white;"><?php echo $row['std_name']; ?></td>
                        <td style="color:white;"><?php echo $row['resume']; ?></td>
                        <td style="color:white;"><?php echo $row['linkedin_url']; ?></td>
                        <td style="color:white;"><a href="request3.php?edit=<?php echo $row['email_id']; ?>"
                                class="btn btn-info">Accept</a></td>
                        <td style="color:white;"><a href="request3.php?edit2=<?php echo $row['email_id']; ?>"
                                class="btn btn-info">Reject</a></td>
                    
                            <!-- <a href="process.php?delete=<?php echo $row['email_id']; ?>"
                                class="btn btn-danger">Delete</a> -->
                    </tr>
                <?php endwhile; ?>
                </table>
      </div>


      <footer>
            <div class="footer" style="height:100px;margin-top:18em;">
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