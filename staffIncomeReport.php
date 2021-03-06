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
	<h2>View Staff consultancy charges</h2>
	<br>
	<div class="container">
		<form class="card"  method="post" action="">
			<br>
			<h3 class="card-header text-white purple-gradient rounded">Income report</h3>
			<br>
			<table class="table">
				<thead>
					<tr>
						<th width="97" scope="col">Date</th>
						<th width="245" scope="col">Decription</th>
						<th width="86" scope="col">Bill Amount</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql ="SELECT * FROM billing_records where bill_type='Consultancy Charge' AND bill_type_id='$_SESSION[staffid]'";
					$qsql = mysqli_query($conn,$sql);
					$billamt= 0;
					while($rs = mysqli_fetch_array($qsql))
					{
						echo "<tr>
						<td>&nbsp;$rs[bill_date]</td>
						<td>&nbsp; $rs[bill_type]";

						if($rs[bill_type] == "Service Charge")
						{
							$sqlservice_type1 = "SELECT * FROM service_type WHERE service_type_id='$rs[bill_type_id]'";
							$qsqlservice_type1 = mysqli_query($conn,$sqlservice_type1);
							$rsservice_type1 = mysqli_fetch_array($qsqlservice_type1);
							echo " - " . $rsservice_type1[service_type];
						}


						if($rs[bill_type]== "Room Rent")
						{
							$sqlroomtariff = "SELECT * FROM room WHERE roomid='$rs[bill_type_id]'";
							$qsqlroomtariff = mysqli_query($conn,$sqlroomtariff);
							$rsroomtariff = mysqli_fetch_array($qsqlroomtariff);
							echo " : ". $rsroomtariff[roomtype] .  "- Room No." . $rsroomtariff[roomno];
						}

						if($rs[bill_type] == "Consultancy Charge")
						{
//Consultancy Charge
							$sqlstaff = "SELECT * FROM staff WHERE staffid='$rs[bill_type_id]'";
							$qsqlstaff = mysqli_query($conn,$sqlstaff);
							$rsstaff = mysqli_fetch_array($qsqlstaff);
							echo " - Mr.".$rsstaff[staffname];
						}

						if($rs[bill_type] =="Treatment Cost")
						{	
//Treatment Cost
							$sqltreatment = "SELECT * FROM treatment WHERE treatmentid='$rs[bill_type_id]'";
							$qsqltreatment = mysqli_query($conn,$sqltreatment);
							$rstreatment = mysqli_fetch_array($qsqltreatment);
							echo " - ".$rstreatment[treatmenttype];
						}

						if($rs[bill_type]  == "Prescription charge")
						{
							$sqltreatment = "SELECT * FROM prescription WHERE treatmentid='$rs[bill_type_id]'";
							$qsqltreatment = mysqli_query($conn,$sqltreatment);
							$rstreatment = mysqli_fetch_array($qsqltreatment);

							$sqltreatment1 = "SELECT * FROM treatment_records WHERE treatmentid='$rstreatment[treatment_records_id]'";
							$qsqltreatment1 = mysqli_query($conn,$sqltreatment1);
							$rstreatment1 = mysqli_fetch_array($qsqltreatment1);

							$sqltreatment2 = "SELECT * FROM treatment WHERE treatmentid='$rstreatment1[treatmentid]'";
							$qsqltreatment2 = mysqli_query($conn,$sqltreatment2);
							$rstreatment2 = mysqli_fetch_array($qsqltreatment2);
							echo 	" - " . $rstreatment2[treatmenttype];
						} 

						echo " </td><td>&nbsp;Rs. $rs[bill_amount]</td></tr>";
						$billamt = $billamt +  $rs[bill_amount];
					}
					?>
				</tbody>
			</table>

			<table width="100%" >
				<tbody>

					<tr>
						<th scope="col"><div align="right">Total Earnings &nbsp; </div></th>
						<td>&nbsp;Rs. <?php echo ($billamt + $taxamt)  - $rsbilling_records[discount] ; ?></td>
					</tr>
				</tbody>
			</table>
		</form>
		<p>&nbsp;</p>
	</div>
</div>

<?php include './includes/footer.php'; ?>