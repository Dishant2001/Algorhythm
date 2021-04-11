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
if(isset($_GET['edit'])){
    $student_email=$_SESSION['User'];
    $startup_email=$_GET['edit'];
$query2="UPDATE `students_details` SET `is_accepted`='1' WHERE `email_id`='$startup_email'";
$result=$con->query($query2);
}
else if(isset($_GET['edit2'])){
    $student_email=$_SESSION['User'];
    $startup_email=$_GET['edit2'];
$query2="UPDATE `students_details` SET `is_accepted`='0' WHERE `email_id`='$startup_email'";
$result=$con->query($query2);
}
}
header('Location:index.php');
}

?>