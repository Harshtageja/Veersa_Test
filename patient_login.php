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

$sql = "SELECT Email, password FROM registered_patient where Email='".$_POST['Name']."'and password='".$_POST['password']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  setcookie('Email', $_POST['Name'], time() + (86400 * 30), "/");
 
  ?>
  <h1>Logged in Successfully</h1>
  <form method="post" action="index2.php" id="myform">
    <input name="Email" type="hidden" value="<?php echo $_POST['Name'] ?>"></input>
  </form>
<script type="text/javascript">
  document.getElementById("myform").submit();
</script>
  <?php
} else {
  ?>
  <h1>No account found</h1>
  <?php
}
$conn->close();
?>
</body>
</html>

