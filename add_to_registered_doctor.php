<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
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

$sql = "INSERT INTO registered_doctor (doctor_name,Email,password,Speciality)VALUES ('".$_POST['Name']."', '".$_POST['Email']."', '".$_POST['password']."','".$_POST['Speciality']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: index.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>

