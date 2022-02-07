<html>
<head>
	<!-- inorder to Support Amharic Languge -->
	<meta charset="utf-8"> 
	<title>Kebele Management System *</title>
	<!-- the stylesheet and the js content looded bellow -->

		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<script src="JS/process_login.js"></script>
		
</head>
<body style="margin: 0;">
<div id="warper">
	<div class="headingtxt"> <p style="text-align: center;font-family: algerian;font-size: 40px;">Kebele Management System</p>
		<!-- alternativ-lang -->
	<!-- 	<a herf="#" id="alink"> Change to Amahric</a> -->

	</div>
<!-- Inserting login banner  -->
<!-- 	<div id="ims">
		the header image bellow
		<img src="IMAGES\chh.png">
		
	</div>  register -->
	<div id="Create" class="tabcontent">
  <!-- Regester Form here --> 
    <h2 style="color:yellow;" align="center">Marriage Certificate</h2>
        <form action="../PHP/Admins/create_emp.php"method="post">
        <table width="100%" height="70%" ><tr><td width="5%" style="padding-left: 100px;">
        <span style="width: 60%;height: 40%;background-color: pink;float: left;margin-left: 50px;margin-top: -10px;">User Photo.jpg</span>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="file"name="image">
        <input type="submit" name="uploaduser" value="upload Profile Photo" id="up_btn">
      </td><td>
          &nbsp;&nbsp;<lable style="color:yellow;">Full Name of hasband </lable><input type="text" name="f_name"id="txts1"><br><br>
          &nbsp;&nbsp;<label style="color:yellow;">Full Name of wife </lable>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="m_name"id="txt2">
          <br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Marriage Day </lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="l_name"id="txt3"><br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Marriage Year</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user_name"id="txt4"><br><br>
          &nbsp;&nbsp;<label style="color:yellow;">Nationality  </lable>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="m_name"id="txt2"><br><br>
          &nbsp;&nbsp;
          </select><br><br>
          <input type="submit" value="Rgester" name="regbtn" id="reg_btn">
          <input type="reset" value="Clear" name="clsbtn" id="cls_btn">
          </td></tr>
        </table>
      </form>
  <!-- end of regesteration form -->
</div>
	
	


</div>
<script type="text/javascript">
	//Only admin can reset passwords when it lost, 
	//javascript notifiyes to the user when forget link is innovked
	//javascript function loaded here , so the page runs faster
	function validate_inputs(){
		var userfiled=document.getElementById('in1').value;
		var passfiled=document.getElementById('in2').value;
		if (userfiled=="") {
			
			document.getElementById('err').innerHTML="Empty Username Not Allowed !";
			 document.getElementById("in1").style.background="#f95b5b";
			 
			return false;
			
		}
		if(!isNaN(userfiled)){
			document.getElementById('err').innerHTML="Only charcters are Allowed for username !";
			document.getElementById("in1").style.background="#f95b5b";
			return false;
		}
		if(passfiled==""){
			document.getElementById('err').innerHTML="Empty Password Not Allowed !";
			document.getElementById("in2").style.background="#f95b5b";
			return false;
		}
		return ( true );

	}
</script>
</body>
</html>