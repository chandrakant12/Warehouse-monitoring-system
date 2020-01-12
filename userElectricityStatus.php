<?php include './includes/header.php'; ?>

<?php 

    if(!isset($_SESSION[patientid]))
    {
        echo "<script>window.location='userLogin.php';</script>";
    }


    $sqlpatient = "SELECT * FROM user WHERE patientid='$_SESSION[patientid]' ";
    $qsqlpatient = mysqli_query($conn,$sqlpatient);
    $rspatient = mysqli_fetch_array($qsqlpatient);

    $sqlpatientappointment = "SELECT * FROM appointment WHERE patientid='$_SESSION[patientid]' ";
    $qsqlpatientappointment = mysqli_query($conn,$sqlpatientappointment);
    $rspatientappointment = mysqli_fetch_array($qsqlpatientappointment);
?>



<!--  
	
https://architectui.com/#/
REF
https://demo.dashboardpack.com/architectui-html-pro/index.html

-->
	
	<?php include './includes/electricityStatus.php'; ?>


<?php include './includes/footer.php'; ?>
