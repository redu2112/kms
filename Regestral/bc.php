<?php
#include auth.php to all secure pages
include("../PHP/auth.php");
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kebele Management System *</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css">
		<link rel="stylesheet" type="text/css" href="../CSS/tab_style.css">
		<link rel="stylesheet" type="text/css" href="../CSS/reg_form.css">
    <style>
      /* Container holding the image and the text */
.container {
  position: relative;
  text-align: center;
  color: white;
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  top: 60%;
  left: 37%;
  transform: translate(-50%, -50%);
  font-size: 30px;
  color: black;
}

/* Top left text */
.top-left {
  position: absolute;
    top: 43%;
    left: 70%;
    transform: translate(-50%, -50%);
    font-size: 30px;
    color: black;
}

/* Top right text */
.top-right {
  position: absolute;
  top: 30%;
  right: 45%;
  font-size: 30px;
  color: black;
}

/* Bottom right text */
.bottom-right {
  position: absolute;
  top: 60%;
  left: 63%;
  transform: translate(-50%, -50%);
  font-size: 30px;
  color: black;
}

/* Centered text */
.centered {
  position: absolute;
  top: 43%;
  left: 30%;
  transform: translate(-50%, -50%);
  font-size: 30px;
  color: black;
}
       /*Define your embeded css style code here*/
  #photos{
  width: 100%;
  height: 200%;
  margin: 0;
  padding-top: -50%;
  border-style: solid;
  border-color: #22b154;
  border-radius: 70%;
  background-color: white;
    </style>
</head>
<body bgcolor="#CB9589">
  <h1 align="center" style="color:orange;font-weight: bold;">List of all Birth Certificates</h1>
   <table >
        <tr>
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
            $uuname = '<?php $_SESSION["username"] ?>';

            $sql = "SELECT * FROM bc";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<hr><hr>";
                echo '<div class="container">
  <img src="bc.jpg" alt="Snow" style="width:100%;">
  <div class="bottom-left">'.$row["Place"].'</div>
  <div class="top-left">'.$row["MoterName"].'</div>
  <div class="top-right">'.$row["FullName"].'</div>
  <div class="bottom-right">'.$row["Date"].'</div>
  <div class="centered">'.$row["FaterName"].'</div>
</div>';
              }
            } else {
              echo "0 results";
            }
            $conn->close();
            ?>
            <hr>
        </tr>
        </table>
        <!-- Designing the certificate -->
<!-- javascript code bellow here helps to load the page more faster -->

<script src="../JS/tabs.js"></script>
</body>
</html>