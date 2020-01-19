<?php include './includes/header.php'; ?>

<?php
    include './includes/connection.php';

	if(isset($_POST[submit]))
	{
		if(isset($_GET[editid]))
		{
			$sql ="UPDATE user SET username='$_POST[username]',admissiondate='$_POST[admissiondate]',admissiontime='$_POST[admissiontme]',address='$_POST[address]',mobileno='$_POST[mobilenumber]',city='$_POST[city]',pincode='$_POST[pincode]',loginid='$_POST[loginid]',password='$_POST[password]',bloodgroup='$_POST[select2]',gender='$_POST[select3]',dob='$_POST[dateofbirth]',status='$_POST[select]' WHERE userid='$_GET[editid]'";
			
			if($qsql = mysqli_query($conn,$sql))
			{
				echo "<script>alert('record updated successfully...');</script>";
			}
			else
			{
				echo mysqli_error($conn);
			}	
		}
		else
		{	
			
			$sql ="INSERT INTO user(username,address,mobileno,city,pincode,loginid,password,gender) values('$_POST[username]','$dt','$tim','$_POST[address]','$_POST[mobilenumber]','$_POST[city]','$_POST[pincode]','$_POST[loginid]','$_POST[password]','$_POST[select2]','$_POST[select3]')";
			if($qsql = mysqli_query($conn,$sql))
			{
				echo "<script>alert('record inserted successfully...');</script>";
				$insid= mysqli_insert_id($conn);
				if(isset($_SESSION[adminid]))
				{
					echo "<script>window.location='appointment.php?patid=$insid';</script>";	
				}
				else
				{
					echo "<script>window.location='userLogin.php';</script>";	
				}		
			}
			else
			{
				echo mysqli_error($conn);
			}
		}
	}

	if(isset($_GET[editid])){
		$sql="SELECT * FROM user WHERE userid='$_GET[editid]' ";
		$qsql = mysqli_query($conn,$sql);
		$rsedit = mysqli_fetch_array($qsql);	
	}
?>

<div class="container text-center">
	<br><h1>New User ???? Register below</h1>
	<div class="container">
		<br>
		<div class="container">
			<div class="card">

				<h5 class="card-header purple-gradient white-text text-center py-4">
					<strong>User profile Registration Panel</strong>
				</h5>

				<!--Card content-->
				<div class="card-body px-lg-5 pt-0">
					<div class="container text-center">
						<br>

						<form method="post" action="" name="frmuser" onSubmit="return validateform()">
							<table class="form-group" style="width:100%; ">
								<div >
									<tbody>
										<tr class="">
											<td width="20%">Name : </td>
											<td width="80%"><input class="form-control" type="text" name="username" id="username"  value="<?php echo $rsedit[username]; ?>"/></td>
										</tr>

										<?php
											if(isset($_GET[editid]))
											{
										?>       

										<!--<tr class="">
											<td>Admission Date : </td>
											<td><input class="form-control" type="date" name="admissiondate" id="admissiondate" value="<?php echo $rsedit[admissiondate]; ?>" readonly /></td>
										</tr>
										<tr class="">
											<td>Admission Time : </td>
											<td><input class="form-control" type="time" name="admissiontme" id="admissiontme" value="<?php echo $rsedit[admissiontime]; ?>" readonly /></td>
										</tr>

										<?php
											}
										?>-->

										<tr class="">
											<td>Address : </td>
											<td><textarea class="form-control" name="address" id="address" cols="45" rows="5"><?php echo $rsedit[address]; ?></textarea></td>
										</tr>
										<tr class="">
											<td>Mobile Number : </td>
											<td><input class="form-control" type="text" name="mobilenumber" id="mobilenumber" value="<?php echo $rsedit[mobileno]; ?>" /></td>
										</tr>
										<tr class="">
											<td>City : </td>
											<td><input class="form-control" type="text" name="city" id="city" value="<?php echo $rsedit[city]; ?>" /></td>
										</tr>
										<tr class="">
											<td>PIN Code : </td>
											<td><input class="form-control" type="text" name="pincode" id="pincode" value="<?php echo $rsedit[pincode]; ?>" /></td>
										</tr>
										<tr class="">
											<td>Login ID : </td>
											<td><input class="form-control" type="text" name="loginid" id="loginid"  value="<?php echo $rsedit[loginid]; ?>"/></td>
										</tr>
										<tr class="">
											<td>Password : </td>
											<td><input class="form-control" type="password" name="password" id="password" value="<?php echo $rsedit[password]; ?>" /></td>
										</tr>
										<tr class="">
											<td>Confirm Password : </td>
											<td><input class="form-control" type="password" name="confirmpassword" id="confirmpassword"  value="<?php echo $rsedit[confirmpassword]; ?>"/></td>
										</tr>
										<!--<tr class="">
											<td>Group : </td>
											<td><select class="browser-default custom-select" name="select2" id="select2">
												<option value="">Select</option>

												<?php
													$arr = array("A+","A-","B+","B-","O+","O-","AB+","AB-");
													foreach($arr as $val)
													{
														if($val == $rsedit[bloodgroup])
														{
															echo "<option value='$val' selected>$val</option>";
														}
														else
														{
															echo "<option value='$val'>$val</option>";			  
														}
													}
												?>
												</select>
											</td>
										</tr>
										<tr class="">
											<td>Gender : </td>
											<td><select class="browser-default custom-select" name="select3" id="select3">
												<option value="">Select</option>
												<?php
													$arr = array("MALE","FEMALE");
													foreach($arr as $val)
													{
														if($val == $rsedit[gender])
														{
															echo "<option value='$val' selected>$val</option>";
														}
														else
														{
															echo "<option value='$val'>$val</option>";			  
														}
													}
												?>
												</select>
											</td>
										</tr>
										<tr class="">
											<td>Date Of Birth : </td>
											<td><input class="form-control" type="date" name="dateofbirth" max="<?php echo date("Y-m-d"); ?>" id="dateofbirth"  value="<?php echo $rsedit[dob]; ?>"/></td>
										</tr>-->					
										<tr class="">
											<td colspan="2" align="center"><input type="submit" class="btn purple-gradient" name="submit" id="submit" value="Submit" /></td>
										</tr>
									</tbody>
								</div>
								</table>
						</form>
						<p>&nbsp;</p>
					</div>
				</div>
			</div>
		</div>
		<br><br>
	</div>
</div>

<?php include './includes/footer.php'; ?>

<script type="application/javascript">
	var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
	var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
	var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
	var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 
    var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

	var lowerCaseLetters = /[a-z]/g;
	var upperCaseLetters = /[A-Z]/g;
	var numbers = /[0-9]/g;

	var regularExpression = /^(?=.[!@#\$%\^&])+$/;

	function validateform()
	{

		if(document.frmuser.username.value == "")
		{
			alert("User name should not be empty..");
			document.frmuser.username.focus();

			return false;
		}
		else if(!document.frmuser.username.value.match(alphaspaceExp))
		{
			alert("User name not valid..");
			document.frmuser.username.focus();
			return false;
		}
		/*
		else if(document.frmuser.admissiondate.value == "")
		{
			alert("Admission date should not be empty..");
			document.frmuser.admissiondate.focus();
			return false;
		}
		else if(document.frmuser.admissiontme.value == "")
		{
			alert("Admission time should not be empty..");
			document.frmuser.admissiontme.focus();
			return false;
		}*/
		else if(document.frmuser.address.value == "")
		{
			alert("Address should not be empty..");
			document.frmuser.address.focus();
			return false;
		}
		else if(document.frmuser.mobilenumber.value == "")
		{
			alert("Mobile number should not be empty..");
			document.frmuser.mobilenumber.focus();
			return false;
		}
		else if(!document.frmuser.mobilenumber.value.match(numericExpression))
		{
			alert("Mobile number not valid..");
			document.frmuser.mobilenumber.focus();
			return false;
		}
		else if(document.frmuser.mobilenumber.value.length != 10	)
		{
			alert("Mobile number should be 10 digits..");
			document.frmuser.mobilenumber.focus();
			return false;
		}
		else if(document.frmuser.mobilenumber.value.length > 10	)
		 {
		 	alert("Mobile number should not be greater than 10 digits..");
		 	document.frmuser.mobilenumber.focus();
		 	return false;
		 }
		else if(document.frmuser.city.value == "")
		{
			alert("City should not be empty..");
			document.frmuser.city.focus();
			return false;
		}
		else if(!document.frmuser.city.value.match(alphaspaceExp))
		{
			alert("City not valid..");
			document.frmuser.city.focus();
			return false;
		}
		else if(document.frmuser.pincode.value == "")
		{
			alert("Pincode should not be empty..");
			document.frmuser.pincode.focus();
			return false;
		}
		else if(document.frmuser.pincode.value.length != 6)
		{
			alert("Pincode is 6 digit..");
			document.frmuser.pincode.focus();
			return false;
		}
		else if(!document.frmuser.pincode.value.match(numericExpression))
		{
			alert("Pincode not valid..");
			document.frmuser.pincode.focus();
			return false;
		}
		else if(document.frmuser.loginid.value == "")
		{
			alert("Login ID should not be empty..");
			document.frmuser.loginid.focus();
			return false;
		}
		else if(!document.frmuser.loginid.value.match(alphanumericExp))
		{
			alert("Login ID not valid..");
			document.frmuser.loginid.focus();
			return false;
		}
		else if(document.frmuser.password.value == "")
		{
			alert("Password should not be empty..");
			document.frmuser.password.focus();
			return false;
		}
		else if(document.frmuser.password.value.length < 8)
		{
			alert("Password length should be more than 8 characters...");
			document.frmuser.password.focus();
			return false;
		}

		else if(!document.frmuser.password.value.match(lowerCaseLetters)) 
		{
			alert("Password must contain Lower case Letters ...");
			document.frmuser.password.focus();
			return false;
		}

		else if(!document.frmuser.password.value.match(upperCaseLetters)) 
		{
			alert("Password must contain at least 1 Upper case Letter ...");
			document.frmuser.password.focus();
			return false;
		}

		else if(!document.frmuser.password.value.match(numbers)) 
		{
			alert("Password must contain numeric values ...");
			document.frmuser.password.focus();
			return false;
		}
	

		
		else if(!document.frmuser.password.value.match(regularExpression)) {
        	alert("password should contain atleast one special character");
        	document.frmuser.password.focus();
        	return false;
    	
		else if(document.frmuser.password.value != document.frmuser.confirmpassword.value )
		{
			alert("Password and confirm password should be equal..");
			document.frmuser.confirmpassword.focus();
			return false;
		}
		else if(document.frmuser.select2.value == "")
		{
			alert("Blood Group should not be empty..");
			document.frmuser.select2.focus();
			return false;
		}
		else if(document.frmuser.select3.value == "")
		{
			alert("Gender should not be empty..");
			document.frmuser.select3.focus();
			return false;
		}
		else if(document.frmuser.dateofbirth.value == "")
		{
			alert("Date Of Birth should not be empty..");
			document.frmuser.dateofbirth.focus();
			return false;
		}
		else if(document.frmuser.select.value == "" )
		{
			alert("Kindly select the status..");
			document.frmuser.select.focus();
			return false;
		}
		else
		{
			return true;
		}
	}
</script>