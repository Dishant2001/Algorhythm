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

$m_name = $_POST['first-name'];
$gender = $_POST['gender'];
$dob = $_POST['bdate'];
$educational_details = $_POST['education'];
$photo = $_POST['mentor-pic'];
$email_id = $_POST['email'];
$passward = $_POST['password'];
$mobile_no = $_POST['phone'];
$linkedin_url = $_POST['link'];

$sql = "INSERT INTO `mentor_details` (m_name,educational_details,photo,gender,dob,email_id,passward,mobile_no,linkedin_url)
VALUES ('$m_name', '$educational_details','$photo','$gender','$dob','$email_id','$passward','$mobile_no','$linkedin_url')";

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location:login.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$sel_sql = "SELECT * FROM mentor_details";
$result = $conn->query($sel_sql);
/*
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["mentor_id"]. 
    " Name: " . $row["m_name"]. 
    " Educational Details" . $row["educational_details"].
    " Domain tags" . $row["domain_tags"].
    " Email ID" . $row["email_id"].
    " Mobile Number" . $row["mobile_no"].
    " Gender" . $row["gender"].
    " Date of Birth" . $row["dob"].
    " Photo" . $row["photo"].
    " LinkedIn Url" . $row["linkedin_url"]. "<br>";
  }
} else {
  echo "0 results";
}*/

?>