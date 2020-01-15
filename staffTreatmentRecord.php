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

<div class="container text-center">
	<br>
	<h2>View New treatment records</h2>
	<br>
	<div class="container">
		<form class="card" method="post" action="">
			<br>
			<h1 class="card-header rounded text-white purple-gradient">View treatment records</h1>
			<br>
			<table class="table" width="692" border="3">
				<thead>
					<tr>
						<td width="71">Treatment type</td>
						<td width="52">User</td>
						<td width="78">Staff</td>
						<td width="82">Treatment Description</td>
						<td width="43">Treatmentdate</td>
						<td width="43">Treatmenttime</td>

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