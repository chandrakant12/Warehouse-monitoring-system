<?php
include './includes/header.php';

if(!isset($_SESSION[adminid]))
{
	echo "<script>window.location='adminLogin.php';</script>";
}
?>
<div class="container">
<div class="row">
	<!--
	<nav class="peach-gradient col-md-2 d-none d-md-block sidebar">
		<div class="sidebar-sticky">
			<ul class="nav flex-column">
				<br>
				<li class="nav-item">
					<a class="nav-link active" href="#">
						<span data-feather="home"></span>
						Dashboard <span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						<span data-feather="file"></span>
						Personal Details
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						<span data-feather="bar-chart-2"></span>
						Summary
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						<span data-feather="users"></span>
						Users Added 
					</a>
				</li>

			</ul>

			<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
				<span>Saved reports</span>
				<a class="d-flex align-items-center text-muted" href="#">
					<span data-feather="plus-circle"></span>
				</a>
			</h6>
			<ul class="nav flex-column mb-2">
				<li class="nav-item">
					<a class="nav-link" href="#">
						<span data-feather="file-text"></span>
						Current month
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						<span data-feather="file-text"></span>
						Last quarter
					</a>
				</li>

			</ul>
		</div>
	</nav> -->

	<div class="col container">
		<br>
		<div class="row">
			<div class="col">
				<h3><strong>Admin Dashboard</strong></h3>
			</div>
			<div class="col">
				<form method="get" action=""><strong>Date -</strong> <input type="date" name="date" value="<?php echo $_GET[date]; ?>" ><input type="submit" name="submit" value="Submit"></form>			
			</div>
		</div>
		<br>
		<div class="container">

			<div class="row">
				<div class="col">
					

					<h4>Number of User Records : 
						<?php
						$sql = "SELECT * FROM user WHERE status='Active'";
						if(isset($_GET[date]))
						{
							$sql = $sql . " AND admissiondate ='$_GET[date]'";
						}
						$qsql = mysqli_query($conn,$sql);
						echo mysqli_num_rows($qsql);
						?>
					</h4>    
					
				</div>
				<div class="col">			
					<h4 style="color:rgba(0,4,70,1.00)"> &nbsp; Database Records</h4>
					<h4>Number of Admin records :  
						<?php
						$sql = "SELECT * FROM admin WHERE status='Active'";
						$qsql = mysqli_query($conn,$sql);
						echo mysqli_num_rows($qsql);
						?>
					</h4>
					<h4>Number of Department Records : 
						<?php
						$sql = "SELECT * FROM department WHERE status='Active'";
						$qsql = mysqli_query($conn,$sql);
						echo mysqli_num_rows($qsql);
						?>
					</h4>
					<h4>Number of Staff Records : 
						<?php
						$sql = "SELECT * FROM staff WHERE status='Active' ";
						$qsql = mysqli_query($conn,$sql);
						echo mysqli_num_rows($qsql);
						?>
					</h4>
					<!-- <h4>Number of Staff Timings Records : 
						<?php
						$sql = "SELECT * FROM staff_timings WHERE status='Active'";
						$qsql = mysqli_query($conn,$sql);
						echo mysqli_num_rows($qsql);
						?>
					</h4> -->
				</div>
			</div>
		</div>
	</div>
</div>
<br><br><br><br><br>
</div>
<?php
include './includes/footer.php';
?>