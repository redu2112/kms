<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kebele";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT FirstName, MiddleName, LastName, UserName FROM emp_user WHERE UserName='abebe'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<h1>"."FirstName: " . $row["FirstName"]."</h1>"."<br>"." MiddleName: " . $row["MiddleName"]. " " . $row["LastName"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>