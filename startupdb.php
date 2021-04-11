<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "algorhythm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sname = htmlentities($_POST['startup-name']);
$founder = htmlentities($_POST['founder-name']);
$description = htmlentities($_POST['desc']);
$logo = $_POST['startup-logo'];
$email_id = htmlentities($_POST['email']);
if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email!";
  echo $emailErr;
}
$passward = htmlentities($_POST['password']);
$mobile_no = htmlentities($_POST['phone']);
$state = htmlentities($_POST['state']);
$district = htmlentities($_POST['district']);
$pincode = htmlentities($_POST['pincode']);
$linkedin_url = htmlentities($_POST['link']);
if(!preg_match("/(https?)?:?(\/\/)?(([w]{3}||\w\w)\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;)",$linkedin_url)){
  echo "Invalid LinkedIn URL";
}

$sql = "INSERT INTO `startup_details` (sname, founder, description,logo,email_id,passward,mobile_no,state,district,pincode,linkedin_url)
VALUES ('$sname','$founder', '$description','$logo','$email_id','$passward','$mobile_no','$state','$district','$pincode','$linkedin_url')";

if ($conn->query($sql) === TRUE) {
  header('Location:login.php');
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$sel_sql = "SELECT * FROM startup_details";
$result = $conn->query($sel_sql);
/*
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["s_id"]. 
    " Name: " . $row["sname"]. 
    " Founder" . $row["founder"].
    " Description" . $row["description"].
    " Logo" . $row["logo"].
    " Domain Tags" . $row["domain_tags"].
    " Email Id" .$row["email_id"].
    " Mobile Number" .$row["mobile_no"].
    " State" .$row["state"].
    " District".$row["district"].
    " Pincode".$row["pincode"].
    " LinkedIn Url" . $row["linkedin_url"]. "<br>";
  }
} else {
  echo "0 results";
}*/

$conn->close();
?>