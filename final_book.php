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

$sql = "INSERT INTO Final_Appointment (doctor_id,patient_id,slot)VALUES ('".$_POST['doctor_id']."', '".$_COOKIE['Email']."', '".$_POST['nine']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "Delete From doctorslot where doctor_id='".$_POST['doctor_id']."'and availability='".$_POST['nine']."'";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  header("Location: index2.php");
$conn->close();
?>