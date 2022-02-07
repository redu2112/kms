<?php
#include auth.php to all secure pages
include("../PHP/auth.php");
?>
<html>
<head>
	<title>Kebele Management System *</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css">
		<link rel="stylesheet" type="text/css" href="../CSS/tab_style.css">
		<link rel="stylesheet" type="text/css" href="../CSS/reg_form.css">
    <style>
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
<body>
<div id="warper">
	<div id="ims" class="headingtxt">
    <!-- logo-banner -->
		<!-- <img src="..\IMAGES\chh.png"> -->
	</div>
	<div id="content">
		<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Regester')">Regester</button>
  <button class="tablinks" onclick="openCity(event, 'Update')">Update</button>
  <button class="tablinks" onclick="openCity(event, 'Search')">Search</button>
  <button class="tablinks" onclick="openCity(event, 'Message')">View Notifications</button>
  <button class="tablinks" onclick="openCity(event, 'Delet')">Delete</button>
</div>
<div id="Regester" class="tabcontent">
  <!-- Regester Form here --> 
    <h3 style="color:yellow;">Create Users</h3>
    <p style="color: orange;font-weight: bold;">the create employ form is under constarction it will be load here . . .</p>
        <form action="../PHP/Admins/create_emp.php"method="post">
        <table width="50%" height="70%" border="2"><tr><td width="5%">
        <span style="width: 60%;height: 40%;background-color: pink;float: left;margin-left: 50px;margin-top: -10px;">User Photo.jpg</span>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="file"name="image">
        <input type="submit" name="uploaduser" value="upload Profile Photo" id="up_btn">
      </td><td>
          &nbsp;&nbsp;<lable style="color:yellow;">First Name</lable><input type="text" name="f_name"id="txts1"><br><br>
          &nbsp;&nbsp;<label style="color:yellow;">Middle Name  </lable>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="m_name"id="txt2">
          <br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Last Name</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="l_name"id="txt3"><br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Username</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user_name"id="txt4"><br><br>
          &nbsp;&nbsp;<label style="color:yellow;">Password</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="pass_name"id="txtpass"><br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Position</lable>&nbsp;&nbsp;<select name="emp_pos">
            <option value="Users">User</option>
          </select><br><br>
          <input type="submit" value="Rgester" name="regbtn" id="subbtn">
          <input type="reset" value="Clear" name="clsbtn" id="cls_btn">
          </td></tr>
        </table>
      </form>
  <!-- end of regesteration form -->
</div>
  <!-- end of regesteration form -->
</div>
<div id="Update" class="tabcontent">
  <h3 style="color:yellow;">Update</h3>
  <p style="color: orange;font-weight: bold;">the update form is under constarction it will be load here . . .</p>
   <form action="#" method="post">
   	<label id="uplable">Enter Student ID</label> <input type="text" name="up_id">
   	<select id="selectup">Set Parameter to Update
   	<option>First Name
   	<option>Last Name</option>
   	<option>Sex</option>
   	<option>Mother Name</option>
   	<option>Phone</option>
   	<option>Status</option>
   	</select>
   	<input type="text" name="val_to_update"> <input type="submit" value="Update"name="submit_update_btn">
   </form>
   <hr>
</div>
<div id="Search" class="tabcontent">
  <h3 style="color:yellow">Search</h3>
  <p style="color:orange;font-weight: bold;">the search form is under constarction it will be load here</p>
  <form action="#" method="post">
    <p style="color:pink;font-weight: bold;"> Enter ID Number</p>  <input type="text" placeholder="Search by ID Number" id="serachtxt">
    <input type="submit" value="Search" id="searchbtn">
  </form>
  <hr>
</div>
<div id="Message" class="tabcontent">
<h3 style="color:yellow">Notifications</h3>
  <p style="color:orange;font-weight: bold;">List of all Notifications</p>
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
                echo "<br><br><br><br>"."<h4>"."FulltName: " . $row["FullName"]."</h4>"."<h4>"." FuterName: " . $row["FaterName"]."</h4>"."<h4>"."Place : ". $row["Place"]."</h4>"."<br>";
              }
            } else {
              echo "0 results";
            }
            $conn->close();
            ?>
            <hr>
        </tr>
        </table>
        <form action="bc.php" class="inline">
          <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Regester')">Generate Birth Certificate</button>
</div>
</form>  <hr>
  <div id="inbox">
    <!-- inbox content displayed here  -->
  </div>
  <div id="conpose">
    <!-- Conpose content displayed here -->
  </div>
  <div id="sent">
    <!-- Sent content displayed here -->
  </div>
  <div id="Trash">
    <!-- Trash content displayed here -->
  </div>
</div>
<!-- new tab delet begin here -->
<div id="Delet" class="tabcontent">
<h1>I love to Delete</h1>
</div>
<!-- end -->
	</div>
	
	<div id="fo">
    <a href="../PHP/logout.php"><h3 align="center">Logout</h3></a>
	</div>
</div>

<!-- javascript code bellow here helps to load the page more faster -->
<script src="../JS/tabs.js"></script>
</body>
</html>