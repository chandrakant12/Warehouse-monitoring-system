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
	$sql ="UPDATE user SET status='Active' WHERE patientid='$_GET[patientid]'";
	$qsql=mysqli_query($conn,$sql);

	$sql ="UPDATE appointment SET status='Approved' WHERE appointmentid='$_GET[approveid]'";
	$qsql=mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn) == 1)
	{
		echo "<script>alert('Appointment record Approved successfully..');</script>";
		echo "<script>window.location='viewappointmentpending.php';</script>";
	}	
}
?>
<div class="container text-center">
	<br>
	<div class="row">
		<div class="col">
			<h2>View Appointment records</h2>
		</div>
		<div class="col">
			<h5>Search Pending Appointment - <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter" /></h5>
		</div>
	</div>
	<br>
	<div class="container">
		<section class="container">
			<table class="table table-striped">
				<thead class="purple-gradient white-text ">
					<tr>
						<th>User detail</th>
						<th>Appointment Date &  Time</th>
						<th>Department</th>
						<th>Staff</th>
						<th>Appointment Reason</th>
						<th>Status</th>
						<th><div align="center">Action</div></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql ="SELECT * FROM appointment WHERE (status='Pending' OR status='Inactive')";
					if(isset($_SESSION[patientid]))
					{
						$sql  = $sql . " AND patientid='$_SESSION[patientid]'";
					}
					$qsql = mysqli_query($conn,$sql);
					while($rs = mysqli_fetch_array($qsql))
					{
						$sqlpat = "SELECT * FROM user WHERE patientid='$rs[patientid]'";
						$qsqlpat = mysqli_query($conn,$sqlpat);
						$rspat = mysqli_fetch_array($qsqlpat);


						$sqldept = "SELECT * FROM department WHERE departmentid='$rs[departmentid]'";
						$qsqldept = mysqli_query($conn,$sqldept);
						$rsdept = mysqli_fetch_array($qsqldept);

						$sqldoc= "SELECT * FROM doctor WHERE doctorid='$rs[doctorid]'";
						$qsqldoc = mysqli_query($conn,$sqldoc);
						$rsdoc = mysqli_fetch_array($qsqldoc);
						echo "<tr>

						<td>$rspat[patientname]<br>$rspat[mobileno]</td>		 
						<td>" . date("d-M-Y",strtotime($rs[appointmentdate])) . "<br>" . date("H:i A",strtotime($rs[appointmenttime])) . "</td> 
						<td>$rsdept[departmentname]</td>
						<td>$rsdoc[doctorname]</td>
						<td>$rs[app_reason]</td>
						<td>$rs[status]</td>
						<td><div align='center'>";
						if($rs[status] != "Approved")
						{
							if(!(isset($_SESSION[patientid])))
							{
								echo "<a class=\"btn-sm white-text purple-gradient\" href='appointmentapproval.php?editid=$rs[appointmentid]&patientid=$rs[patientid]'>Approve</a>";
							}
							echo "  <a class=\"btn-sm white-text purple-gradient\" href='viewappointment.php?delid=$rs[appointmentid]'>Delete</a>";
						}
						else
						{
							echo "<a class=\"btn-sm ehite-text purple-gradient\" href='patientreport.php?patientid=$rs[patientid]&appointmentid=$rs[appointmentid]'>View Report</a>";
						}
						echo "</center></td></tr>";
					}
					?>
				</tbody>
			</table>
		</section>
		
	</div>
</div>

<?php include './includes/footer.php'; ?>