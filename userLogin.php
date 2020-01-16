<?php include './includes/header.php'; ?>

<?php


	if(isset($_SESSION[userid]))
	{
		echo "<script>window.location='userAccount.php';</script>";
	}
	if(isset($_POST[submit]))
	{
		$sql = "SELECT * FROM user WHERE loginid='$_POST[loginid]' AND password='$_POST[password]' AND status='Active';";
		$qsql = mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($qsql) >= 1)
		{
			$rslogin = mysqli_fetch_array($qsql);
			$_SESSION[userid]= $rslogin[userid] ;
			echo "<script>window.location='userAccount.php';</script>";
		}
		else
		{
			echo "<script>alert('Invalid login id and password entered..'); </script>";
		}
	}
	
?>
<style type="text/css">
	.cardSty{
		/*max-width: 50%;*/
	}
	body{
		/*background-image: url(https://www.belden.com/hubfs/resources/blog/digital-building/de-cable-safely-carrying-digital-electricity.jpg);*/
		background-image: './images/login.jpeg';
		background-repeat: no-repeat;
	}
</style>

<br><br>
<div class="container text-center card-image"  ">
	<!-- Material form login -->
	<div class="card cardSty card-image" >

		<h5 class="card-header purple-gradient white-text text-center py-4 ">
			<strong>User Login panel</strong>
		</h5>

		<!--Card content-->
		<div class="card-body px-lg-3 pt-0 ">
			<div class="container text-center">
				<br>
				<h5>Kindly login to the website by entering Login ID and Password..</h5>
				<form method="post" action="" name="frmpatlogin" class="text-center" style="color: #757575;" onSubmit="return validateform()">

					<div class="form-group">
						<br>
						<div class="row">
							<div class="col-4">Login ID : </div>
							<div class="col-8">
								<input class="form-control" type="text" name="loginid" id="loginid" >
							</div>
						</div>

						<br>

						<div class="row">							
							<div class="col-4">Password : </div>
							<div class="col-8">
								<input class="form-control" type="password"  name="password" id="password" >
							</div>
						</div>

						<br>
						<input type="submit" class="btn purple-gradient" name="submit" id="submit" value="Login" /></td>

						<br>
						<br>
						<strong>
							New user <a href="userRegister.php">Click Here</a> to Register 
						</strong>
						<br>
						<a href="userForgotPassword.php"><strong>Forgot Password</strong></a>
					</div>
				</form>
				<p>&nbsp;</p>
			</div>
		</div>

	</div>
</div>
<br><br><br>


<?php include './includes/footer.php'; ?>

<script type="application/javascript">
	var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
	var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
	var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
	var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

	function validateform()
	{
		if(document.frmpatlogin.loginid.value == "")
		{
			alert("Login ID should not be empty..");
			document.frmpatlogin.loginid.focus();
			return false;
		}
		else if(document.frmpatlogin.password.value == "")
		{
			alert("Password should not be empty..");
			document.frmpatlogin.password.focus();
			return false;
		}
		else if(document.frmpatlogin.password.value.length < 8)
		{
			alert("Password length should be more than 8 characters...");
			document.frmpatlogin.password.focus();
			return false;
		}
	}
</script>