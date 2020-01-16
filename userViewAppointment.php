<?php
include './includes/header.php';

if(isset($_GET[delid]))
{
	$sql ="DELETE FROM appointment WHERE appointmentid='$_GET[delid]'";
	$qsql=mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn) == 1)
	{
		echo "<script>alert('appointment record deleted successfully..');</script>";
	}
}
if(isset($_GET[approveid]))
{
	$sql ="UPDATE appointment SET status='Approved' WHERE appointmentid='$_GET[approveid]'";
	$qsql=mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn) == 1)
	{
		echo "<script>alert('Appointment record Approved successfully..');</script>";
	}
}
?>

<div class="container">
	<br>
	<div class="row">
		<div class="col">
			<h4>Appointment records</h4>
		</div>
		<div class="col">
			<h4>Search Appointment - <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /></h4>
		</div>
	</div>

	<div class="container">
			<br>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>User detail</th>
						<th>Appointment Date &  Time</th>
						<th>Department</th>
						<th>Staff</th>
						<th>Reason</th>
						<th>Status</th>
						<th><div align="center">Action</div></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql ="SELECT * FROM appointment WHERE (status !='')";
					if(isset($_SESSION[userid]))
					{
						$sql  = $sql . " AND userid='$_SESSION[userid]'";
					}
					$qsql = mysqli_query($conn,$sql);
					while($rs = mysqli_fetch_array($qsql))
					{
						$sqlpat = "SELECT * FROM user WHERE userid='$rs[userid]'";
						$qsqlpat = mysqli_query($conn,$sqlpat);
						$rspat = mysqli_fetch_array($qsqlpat);


						$sqldept = "SELECT * FROM department WHERE departmentid='$rs[departmentid]'";
						$qsqldept = mysqli_query($conn,$sqldept);
						$rsdept = mysqli_fetch_array($qsqldept);

						$sqldoc= "SELECT * FROM staff WHERE staffid='$rs[staffid]'";
						$qsqldoc = mysqli_query($conn,$sqldoc);
						$rsdoc = mysqli_fetch_array($qsqldoc);
						echo "<tr>
						<td>$rspat[username]<br>$rspat[mobileno]</td>		 
						<td>" . date("d-M-Y",strtotime($rs[appointmentdate])) . "  " . date("H:i A",strtotime($rs[appointmenttime])) . "</td> 
						<td>$rsdept[departmentname]</td>
						<td>$rsdoc[staffname]</td>
						<td>$rs[app_reason]</td>
						<td>$rs[status]</td>
						<td><div class='btn aqua-gradient btn-rounded btn-sm' align='center'>";
						if($rs[status] != "Approved")
						{
							if(!(isset($_SESSION[userid])))
							{
								echo "<a href='appointmentapproval.php?editid=$rs[appointmentid]'>Approve</a><hr>";
							}
							echo "  <a href='viewappointment.php?delid=$rs[appointmentid]'>Delete</a>";
						}
						else
						{
							echo "<a href='userreport.php?userid=$rs[userid]&appointmentid=$rs[appointmentid]'>View Report</a>";
						}
						echo "</center></td></tr>";
					}
					?>
				</tbody>
			</table>

		<p></p>
	</div>
</div>

<?php include './includes/footer.php'; ?>