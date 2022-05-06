
<?php

$servername = "localhost";
$username = "cliflkxj_anandhu";
$password = "Anandhu#1234";
$dbname = "cliflkxj_anandhu";


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$Name = test_input($_POST["Name"]);
$Email = test_input($_POST["Email"]);
$Subject = test_input($_POST["Subject"]);
$Message = test_input($_POST["Message"]);

$sql = "INSERT INTO messages (Name,Email,Subject,Message )
VALUES ('$Name','$Email','$Subject','$Message')";

if ($conn->query($sql) === TRUE) {
  echo "YOUR MESSAGE HAS BEEN SENT SUCCESSFULLY!!!!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
<a href="index.html">Back</a>


 