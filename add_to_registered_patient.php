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

$sql = "INSERT INTO registered_patient (patient_name,Email,password)VALUES ('".$_POST['Name']."', '".$_POST['Email']."', '".$_POST['password']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
    header("Location: index.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>