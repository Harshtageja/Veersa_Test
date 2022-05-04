<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veersa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO  doctorslot (doctor_id,Availability)VALUES ('".$_COOKIE['Email']."', '".$_POST['nine']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: doctor_loggedin.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>