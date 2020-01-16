<?php
include './includes/header.php';

if(isset($_GET[delid]))
{
	$sql ="DELETE FROM treatment_records WHERE appointmentid='$_GET[delid]'";
	$qsql=mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn) == 1)
	{
		echo "<script>alert('appointment record deleted successfully..');</script>";
	}
}
?>

<div class="container">
	<br>
	<h4>Treatment Records</h4>
	<br>
	<div class="container">
		<form method="post" action="">
			<table class="table table-hover" width="692" border="3">
				<thead>  
					<tr>
						<th width="71">Treatment type</th>
						<th width="52">User</th>
						<th width="78">Staff</th>
						<th width="82">Treatment Description</th>
						<th width="43">Treatmentdate</th>
						<th width="43">Treatmenttime</th>

					</tr>
				</thead>
				<tbody>
					<?php
					$sql ="SELECT * FROM treatment_records where status='Active'";
					if(isset($_SESSION[userid]))
					{
						$sql = $sql . " AND userid='$_SESSION[userid]'"; 
					}
					if(isset($_SESSION[staffid]))
					{
						$sql = $sql . " AND staffid='$_SESSION[staffid]'";
					}
					$qsql = mysqli_query($conn,$sql);
					while($rs = mysqli_fetch_array($qsql))
					{
						$sqlpat = "SELECT * FROM user WHERE userid='$rs[userid]'";
						$qsqlpat = mysqli_query($conn,$sqlpat);
						$rspat = mysqli_fetch_array($qsqlpat);

						$sqldoc= "SELECT * FROM staff WHERE staffid='$rs[staffid]'";
						$qsqldoc = mysqli_query($conn,$sqldoc);
						$rsdoc = mysqli_fetch_array($qsqldoc);

						$sqltreatment= "SELECT * FROM treatment WHERE treatmentid='$rs[treatmentid]'";
						$qsqltreatment = mysqli_query($conn,$sqltreatment);
						$rstreatment = mysqli_fetch_array($qsqltreatment);

						echo "<tr>
						<td>&nbsp;$rstreatment[treatmenttype]</td>
						<td>&nbsp;$rspat[username]</td>
						<td>&nbsp;$rsdoc[staffname]</td>
						<td>&nbsp;$rs[treatment_description]</td>
						<td>&nbsp;$rs[treatment_date]</td>
						<td>&nbsp;$rs[treatment_time]</td>";  

						echo " </tr>";
					}
					?>
				</tbody>
			</table>
		</form>
		<p>&nbsp;</p>
	</div>
</div>


<?php include './includes/footer.php'; ?>