<?php
include './includes/header.php';

if(isset($_SESSION[staffid]))
{
	echo "<script>window.location='staffaccount.php';</script>";
}
if(isset($_POST[submit]))
{
	$sql = "SELECT * FROM staff WHERE loginid='$_POST[loginid]' AND password='$_POST[password]' AND status='Active'";
	$qsql = mysqli_query($conn,$sql);
	if(mysqli_num_rows($qsql) == 1)
	{
		$rslogin = mysqli_fetch_array($qsql);
		$_SESSION[staffid]= $rslogin[staffid] ;
		echo "<script>window.location='staffaccount.php';</script>";
	}
	else
	{
		echo "<script>alert('Invalid login id and password entered..'); </script>";
	}
}
?>


<div class="container text-center">
	<br>
	<h4>MSEB Login Panel</h4>
		<h4 class="card-header purple-gradient white-text text-center py-4 rounded"><strong>Kindly Enter Login ID and Password..</strong></h4>
	<div class="container card">
		
		<form class="form-group" method="post" action="" name="frmdoctlogin" onSubmit="return validateform()">
			<table class="table" >
				<tbody>
					<tr>
						<td>Login ID</td>
						<td><input class="form-control"  type="text" name="loginid" id="loginid" /></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input class="form-control" type="password" name="password" id="password" /></td>
					</tr>
					<tr>
						<td height="36" colspan="2" align="center"><input class="btn purple-gradient rounded" type="submit" name="submit" id="submit" value="Submit" /></td>
					</tr>
				</tbody>
			</table>
		</form>
		<p>&nbsp;</p>
	</div>
	<br>
</div>


<?php include './includes/footer.php'; ?>

<script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

function validateform()
{
	if(document.frmdoctlogin.loginid.value == "")
	{
		alert("Login ID should not be empty..");
		document.frmdoctlogin.loginid.focus();
		return false;
	}
	else if(!document.frmdoctlogin.loginid.value.match(alphanumericExp))
	{
		alert("Login ID not valid..");
		document.frmdoctlogin.loginid.focus();
		return false;
	}
	else if(document.frmdoctlogin.password.value == "")
	{
		alert("Password should not be empty..");
		document.frmdoctlogin.password.focus();
		return false;
	}
	else if(document.frmdoctlogin.password.value.length < 8)
	{
		alert("Password length should be more than 8 characters...");
		document.frmdoctlogin.password.focus();
		return false;
	}

}
</script>