<?php include("./includes/header.php"); ?>

<?php

	if(isset($_POST[submit])){
		if(isset($_SESSION[userid]))
		{
			$lastinsid =$_SESSION[userid];
		}
		else
		{
			$dt = date("Y-m-d");
			$tim = date("H:i:s");
			$sql ="INSERT INTO user(username,admissiondate,admissiontime,address,city,mobileno,loginid,password,gender,dob,status) values('$_POST[usere]','$dt','$tim','$_POST[textarea]','$_POST[city]','$_POST[mobileno]','$_POST[loginid]','$_POST[password]','$_POST[select6]','$_POST[dob]','Pending')";
			if($qsql = mysqli_query($conn,$sql))
			{
				
			}
			else
			{
				echo mysqli_error($conn);
			}
			$lastinsid = mysqli_insert_id($conn);
		}
		
		$sqlappointment="SELECT * FROM appointment WHERE appointmentdate='$_POST[appointmentdate]' AND appointmenttime='$_POST[appointmenttime]' AND staffid='$_POST[doct]' AND status='Approved'";
		$qsqlappointment = mysqli_query($conn,$sqlappointment);
		if(mysqli_num_rows($qsqlappointment) >= 1)
		{
			echo "<script>alert('Appointment already scheduled for this time..');</script>";
		}
		else
		{
			$sql ="INSERT INTO appointment(appointmenttype,userid,appointmentdate,appointmenttime,app_reason,status,departmentid,staffid) values('ONLINE','$lastinsid','$_POST[appointmentdate]','$_POST[appointmenttime]','$_POST[app_reason]','Pending','$_POST[department]','$_POST[doct]')";
			if($qsql = mysqli_query($conn,$sql))
			{
				echo "<script>alert('Appointment record inserted successfully...');</script>";
			}
			else
			{
				echo mysqli_error($conn);
			}
		}
	}

	if(isset($_GET[editid])){
		$sql="SELECT * FROM appointment WHERE appointmentid='$_GET[editid]' ";
		$qsql = mysqli_query($conn,$sql);
		$rsedit = mysqli_fetch_array($qsql);	
	}

	if(isset($_SESSION[userid])){
		$sqluser = "SELECT * FROM user WHERE userid='$_SESSION[userid]' ";
		$qsqluser = mysqli_query($conn,$sqluser);
		$rsuser = mysqli_fetch_array($qsqluser);
		$readonly = " readonly";
	}
?>

<div class="main">
	<br><br>
	<div class="container">

	<?php
		if(isset($_POST[submit])){
			if(mysqli_num_rows($qsqlappointment) >= 1)
			{		
				echo "<h2>Appointment already scheduled for ". date("d-M-Y", strtotime($_POST[appointmentdate])) . " " . date("H:i A", strtotime($_POST[appointmenttime])) . " .. </h2>";
			}
			else
			{
				if(isset($_SESSION[userid]))
				{
					echo "<h2>Appointment taken successfully.. </h2>";
					echo "<p>Appointment record is in pending process. Kinldy check the appointment status. </p>";
					echo "<p> <a href='viewappointment.php'>View Appointment record</a>. </p>";			
				}
				else
				{
					echo "<h2>Appointment taken successfully.. </h2>";
					echo "<p>Appointment record is in pending process. Please wait for confirmation message.. </p>";
					echo "<p> <a href='userLogin.php'>Click here to Login</a>. </p>";	
				}
			}
		}
		else
		{
	?>

	<!-- Material form login -->
	<div class="card">

		<h5 class="card-header purple-gradient white-text text-center py-4">
			<strong>Add New Appointment</strong>
		</h5>

		<!--Card content-->
		<div class="card-body px-lg-5 pt-0">

		<form method="post" action="" name="frmpatapp" class="text-center" style="color: #757575;" onSubmit="return validateform()">
			<br>
			<table width="100%" >
				<tbody class="form-group">
					<tr>
						<td >User Name : </td>
						<td ><input class="form-control" type="text" name="usere" id="usere" value="<?php echo $rsuser[username];  ?>"  <?php echo $readonly; ?> ></td>
					</tr>
					<tr>
						<td height="62">Address : </td>
						<td><textarea class="form-control" name="textarea" id="textarea" <?php echo $readonly; ?> > <?php echo $rsuser[address]; ?></textarea></td>
					</tr>
					<tr>
						<td>City</td>
						<td><input class="form-control" type="text" name="city" id="city" value="<?php echo $rsuser[city]; ?>" <?php echo $readonly; ?> ></td>
					</tr>
					<tr>
						<td>Mobile Number : </td>
						<td><input class="form-control" type="text" name="mobileno" id="mobileno" value="<?php echo $rsuser[mobileno];  ?>" <?php echo $readonly; ?> ></td>
					</tr>
					
					<?php
						if(!isset($_SESSION[userid]))
						{        
					?>
					
					<tr>
						<td>Login-ID : </td>
						<td><input class="form-control" type="text" name="loginid" id="loginid" value="<?php echo $rsuser[loginid];  ?>" <?php echo $readonly; ?> ></td>
					</tr>
					<tr>
						<td>Password : </td>
						<td><input class="form-control" type="password" name="password" id="password" value="<?php echo $rsuser[username];  ?>" <?php echo $readonly; ?> ></td>
					</tr>

					<?php
			  			}
					?>

					<tr>
						<td>Gender</td>
						<td>

							<?php 
								if(isset($_SESSION[userid]))
								{
									echo $rsuser[gender];
								}
								else
								{
							?>

							<select class="browser-default custom-select" name="select6" id="select6">
								<option value="">Select Gender</option>
								<?php
									$arr = array("Male","Female");
									foreach($arr as $val)
									{
										echo "<option value='$val'>$val</option>";
									}
								?>
							</select>
							<?php
								}
							?>
						</td>
					</tr>
					<tr>
						<td>DOB</td>
						<td><input class="form-control" type="date" name="dob" id="dob" value="<?php echo $rsuser[dob]; ?>" <?php echo $readonly; ?> ></td>
					</tr>
					<tr>
						<td><strong>Enter Appointment Date : </strong></td>
						<td><input class="form-control" type="date" min="<?php echo date("Y-m-d"); ?>" name="appointmentdate" id="appointmentdate"></td>
					</tr>
					<tr>
						<td><strong>Enter Appointment Time : </strong></td>
						<td><input class="form-control" type="time" name="appointmenttime" id="appointmenttime"></td>
					</tr>   
					<tr>
						<td><strong>Department : </strong></td>
						<td>
							<select class="browser-default custom-select" name="department" id="department" onchange="loadstaff(this.value)">
								<option value="">Select department</option>
								<?php
									$sqldept = "SELECT * FROM department WHERE status='Active'";
									$qsqldept = mysqli_query($conn,$sqldept);
									while($rsdept = mysqli_fetch_array($qsqldept))
									{
										echo "<option value='$rsdept[departmentid]'>$rsdept[departmentname]</option>";
									}
								?>
							</select>
						</td>
					</tr>   
					<tr>
						<td><strong>Staff : </strong></td>
						<td>
							<div id="divdoc">
								<select class="browser-default custom-select" name="doct" id="doct">
									<option value="">Select Staff</option>
									<option value=""> Shivram Mahajan</option>          
									<option value=""> Santoshi Mahajan</option>          
								</select>   
							</div>
						</td>
					</tr>        
					<tr>
						<td><strong>Appointment reason : </strong></td>
						<td><textarea class="form-control" name="app_reason"></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" class="btn purple-gradient" name="submit" id="submit" value="Submit" /></td>
					</tr>
				</tbody>
			</table>
		</form>
		<p>&nbsp;</p>

		</div>
	</div>

	<br><br><br>

	<?php
		}
	?>

	</div>
</div>

<?php include("./includes/footer.php"); ?>

<script type="application/javascript">
	var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
	var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
	var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
	var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

	function validateform(){
		if(document.frmpatapp.usere.value == "")
		{
			alert("User name should not be empty..");
			document.frmpatapp.usere.focus();
			return false;
		}
		else if(!document.frmpatapp.usere.value.match(alphaspaceExp))
		{
			alert("User name not valid..");
			document.frmpatapp.usere.focus();
			return false;
		}
		else if(document.frmpatapp.textarea.value == "")
		{
			alert("Address should not be empty..");
			document.frmpatapp.textarea.focus();
			return false;
		}
		else if(document.frmpatapp.city.value == "")
		{
			alert("City should not be empty..");
			document.frmpatapp.city.focus();
			return false;
		}
		else if(!document.frmpatapp.city.value.match(alphaspaceExp))
		{
			alert("City name not valid..");
			document.frmpatapp.city.focus();
			return false;
		}
		else if(document.frmpatapp.mobileno.value == "")
		{
			alert("Mobile number should not be empty..");
			document.frmpatapp.mobileno.focus();
			return false;
		}
		else if(!document.frmpatapp.mobileno.value.match(numericExpression))
		{
			alert("Mobile number not valid..");
			document.frmpatapp.mobileno.focus();
			return false;
		}
		else if(document.frmpatapp.loginid.value == "")
		{
			alert("login ID should not be empty..");
			document.frmpatapp.loginid.focus();
			return false;
		}
		else if(!document.frmpatapp.loginid.value.match(alphanumericExp))
		{
			alert("login ID not valid..");
			document.frmpatapp.loginid.focus();
			return false;
		}
		else if(document.frmpatapp.password.value == "")
		{
			alert("Password should not be empty..");
			document.frmpatapp.password.focus();
			return false;
		}
		else if(document.frmpatapp.password.value.length < 8)
		{
			alert("Password length should be more than 8 characters...");
			document.frmpatapp.password.focus();
			return false;
		}
		else if(document.frmpatapp.select6.value == "")
		{
			alert("Gender should not be empty..");
			document.frmpatapp.select6.focus();
			return false;
		}
		else if(document.frmpatapp.dob.value == "")
		{
			alert("Date Of Birth should not be empty..");
			document.frmpatapp.dob.focus();
			return false;
		}
		else if(document.frmpatapp.appointmentdate.value == "")
		{
			alert("Appointment date should not be empty..");
			document.frmpatapp.appointmentdate.focus();
			return false;
		}
		else if(document.frmpatapp.appointmenttime.value == "")
		{
			alert("Appointment time should not be empty..");
			document.frmpatapp.appointmenttime.focus();
			return false;
		}
		else
		{
			return true;
		}
	}

	function loadstaff(deptid){
		if (window.XMLHttpRequest) {
		    // code for IE7+, Firefox, Chrome, Opera, Safari
		    xmlhttp = new XMLHttpRequest();
		} else {
		    // code for IE6, IE5
		    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		        document.getElementById("divdoc").innerHTML = this.responseText;
		    }
		};
		xmlhttp.open("GET","departmentstaff.php?deptid="+deptid,true);
		xmlhttp.send();
	}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>