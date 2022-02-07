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
		
	</div>  -->
	<div id="content">
		
	</style>

		<fieldset style="width: 30%;margin-left: 35%;">

			<legend>Login Here</legend>
			<!-- <span id="err">Access Denaid Please Try Agin !</span> -->
			<span id="err"></span>
			<form  action="../PHP/login_action.php" id="form_one" method="post" onsubmit="return validate_inputs();>
				
			</style>>
				<p id="flabel">Username<input type="text" placeholder="Enter Username"name="uname" id="in1"><select name="po_type">
					<option value="Admin">Admin</option>
					<option value="Regestral">Data Clerk</option>
					<option value="Users">Users</option>
					<!-- <option value="Parent">Parent</option> -->
					<!-- <option value="Prencipal">Prencipal</option> -->

				</select></p>
		
				<p id="flabel">Password<input type="Password" placeholder="Enter Password" name="pname" id="in2">
				</p>

				<input type="submit" value ="Login"id="sub_btn">
				<input type="reset" value ="Clear"name="clear"id="clear_btn">

			</form>
			
		</fieldset>
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