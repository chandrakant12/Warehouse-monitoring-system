<?php
include './includes/header.php';

if(isset($_POST[submit]))
{
	$sql = "UPDATE user SET password='$_POST[newpassword]' WHERE password='$_POST[oldpassword]' AND userid='$_SESSION[userid]'";
	$qsql= mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn) == 1)
	{
		echo "<script>alert('Password has been updated successfully..');</script>";
	}
	else
	{
		echo "<script>alert('Failed to update password..');</script>";		
	}
}
?>

<div class="container">
	<br><br>
	<h3 class="text-center">Change Password</h4>
	<br>
	<div class="container">
			<form class="form-group" method="post" action="" name="frmpatchange" onSubmit="return validateform()">
				<table class="table " width="100%" border="0">
					<tbody>
						<tr>
							<td width="34%">Old Password</td>
							<td width="66%"><input class="form-control" type="password" name="oldpassword" id="oldpassword" /></td>
						</tr>
						<tr>
							<td>New Password</td>
							<td><input class="form-control" type="password" name="newpassword" id="newpassword" /></td>
						</tr>
						<tr>
							<td>Confirm Password</td>
							<td><input class="form-control" type="password" name="password" id="password" /></td>
						</tr>
						<tr>
							<td height="36" colspan="2" align="center"><input class="btn purple-gradient" type="submit" name="submit" id="submit" value="Submit" /></td>
						</tr>
					</tbody>
				</table>
			</form>
			<p>&nbsp;</p>
		</div>
	</div>
</div>

</div>

<?php include './includes/footer.php'; ?>

<script type="application/javascript">
	function validateform()
	{
		if(document.frmpatchange.oldpassword.value == "")
		{
			alert("Old password should not be empty..");
			document.frmpatchange.oldpassword.focus();
			return false;
		}
		else if(document.frmpatchange.newpassword.value == "")
		{
			alert("New Password should not be empty..");
			document.frmpatchange.newpassword.focus();
			return false;
		}
		else if(document.frmpatchange.newpassword.value.length < 8)
		{
			alert("New Password length should be more than 8 characters...");
			document.frmpatchange.newpassword.focus();
			return false;
		}
		else if(document.frmpatchange.newpassword.value != document.frmpatchange.password.value )
		{
			alert(" New Password and confirm password should be equal..");
			document.frmpatchange.password.focus();
			return false;
		}
		else
		{
			return true;
		}
	}
</script>
