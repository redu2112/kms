<html>
<head>
	<title>Kebele Management System *</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css">
		<link rel="stylesheet" type="text/css" href="../CSS/tab_style.css">
    <style>
  /*Define your embeded css style code here*/
  #photos{
  width: 100%;
  height: 200%;
  margin: 0;
  padding-top: -50%;
  border-style: solid;
  background-color: white;
  border-color: #22b154;
  border-radius: 70%;
}
#upp{
  width: 97.5%;
  height: 58.5%;
  padding-top: -15%;
  margin-bottom: 100px;
  border-style: solid;
  border-color: #22b154;
  background-color: white;
    </style> 
</head>
<body>
<div id="warper">
	<div id="ims" class="headingtxt">
    <!-- logo-banner -->
		<!-- <img src="..\IMAGES\chh.png"> -->
    <p style="text-align: center;font-family: algerian;font-size: 40px;">Kebele Management System</p>
	</div>
	<div id="content">
		<div class="tab">
  <button class="tablinks" onclick="location.href = 'login.php';">Identification Card</button>
  <button class="tablinks" onclick="location.href = 'login.php';">Birth Certificate</button>
  <button class="tablinks" onclick="location.href = 'login.php';">Marriage Certificate</button>
  <button class="tablinks" onclick="location.href = 'login.php';">permission to renew</button>
  <button class="tablinks" onclick="location.href = 'login.php';">Kebele Houses</button>
</div>
<div id="Class" class="tabcontent">
  <!-- Regester Form here --
        </tr>
        </table>
        </td> 
        </tr>
        </table>

        


          
        
        </table>
  <!-- end of regesteration form -->
</div>
<div id="Batchs" class="tabcontent">
  <h1 align="center" style="color: #CD634D;font-family: Britannic Bold;">Ethiopia’s new national dialogue can unify the divided nation</h1>
  <p>Prime Minister Abiy’s initiative can put Ethiopia back on the path to sustainable peace and prosperity.<br>People gather under a placard showing Prime Minister Abiy Ahmed at a really organised by local authorities to show support for the Ethiopian National Defense Force, at Meskel square in downtown Addis Ababa, Ethiopia, November 7, 2021</p>
  <img src="..\IMAGES\pnew.webp" style="height: 60%; width: ;">
  
  
</div>
<div id="Search" class="tabcontent">
  <h1 align="center" style="color: #CD634D;font-family: Britannic Bold;">To address fears of prisoners from COVID-19 and minimize risk of transmission, UNODC donates medical supplies to Ethiopia's prisons</h1>
  <p>
6 May 2020 - In Ethiopia, there have been no confirmed COVID-19 cases in prisons.  However, the uncertainty of the extent and impact of COVID-19 has created anxiety and fear among prisoners, including increased feelings of isolation. <br>People gather under a placard showing Prime Minister Abiy Ahmed at a rally organised by local authorities to show support for the Ethiopian National Defense Force, at Meskel square in downtown Addis Ababa, Ethiopia, November 7, 2021</p>
  <img src="..\IMAGES\covid.jpg" style="height: 45%; width: ;">
  <a href="https://www.unodc.org/unodc/en/frontpage/2020/May/to-address-fears-of-prisoners-from-covid-19-and-minimize-risk-of-transmission--unodc-donates-medical-supplies-to-ethiopias-prisons.html" style="color: blue;">Read More</a>
  
  
</div>
<!-- Commercial License -->
<div id="Sendfeedback" class="tabcontent">
  <h1 align="center" style="color: #CD634D;font-family: Britannic Bold;">Commercial License</h1>
  <table border="2" style="margin: 0">
    <td><img src="..\IMAGES\license.jpg" style="height: 355px; width: 400px ;"></td>
    <td><h3 style="color: #CD634D; margin: 0;" align="center">TreadMark </h3><br>
      <!-- Regester Form here -->
        <form action="../PHP/Admins/create_emp.php"method="post">
        <table width="100%" height="70%" border="2"><tr><td width="5%">
        <span style="width: 60%;height: 40%;background-color: pink;float: left;margin: 0;margin-top: -80px;">User Photo.jpg</span>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="file"name="image">
      </td><td>
          &nbsp;&nbsp;<lable style="color:yellow;">First Name First </lable><input type="text" name="f_name"id="txts1"><br><br>
          &nbsp;&nbsp;<label style="color:yellow;">Middle Name  </lable>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="m_name"id="txt2">
          <br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Last Name</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="l_name"id="txt3"><br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Username</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user_name"id="txt4"><br><br>
          &nbsp;&nbsp;<label style="color:yellow;">Password</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="pass_name"id="txtpass"><br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Business</lable>&nbsp;&nbsp;<select name="emp_pos">
            <option value="Admin">Small scale</option>
          <option value="Regestral">Medium scale</option>
          <option value="Data-controller">Large Scale</option>
          </select><br><br>
          <input type="submit" value="Rgester" name="regbtn" id="reg_btn" style="margin-right: 20px;margin-left: 200px;">
          <input type="reset" value="Clear" name="clsbtn" id="cls_btn">
          </td></tr>
        </table>
      </form>
  <!-- end of regesteration form -->




    </td>
  </table>
</div>
<div id="Inbox" class="tabcontent">
  <h3>Inbox</h3>
  <p>All Inboxs are under constarction and will be loaded here</p>
</div>
	</div>
</div>
<!-- javascript code bellow here helps to load the page more faster -->
<script src="../JS/tabs.js"></script>
</body>
</html>