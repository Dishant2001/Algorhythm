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
if(isset($_GET['st'])){
    $student_email=$_SESSION['User'];
    $startup_email=$_GET['st'];
$query2="INSERT INTO `student_startup`(std_email_id, startup_email_id)
VALUES ('$student_email','$start_up_email')";
$result=$con->query($query2);
}
}
header('Location:index.php');
}

?>