<?php include './includes/header.php'; ?>

<?php 

    if(!isset($_SESSION[userid]))
    {
        echo "<script>window.location='userLogin.php';</script>";
    }


    $sqluser = "SELECT * FROM user WHERE userid='$_SESSION[userid]' ";
    $qsqluser = mysqli_query($conn,$sqluser);
    $rsuser = mysqli_fetch_array($qsqluser);

    $sqluserappointment = "SELECT * FROM appointment WHERE userid='$_SESSION[userid]' ";
    $qsqluserappointment = mysqli_query($conn,$sqluserappointment);
    $rsuserappointment = mysqli_fetch_array($qsqluserappointment);
?>



<!--  
	
https://architectui.com/#/
REF
https://demo.dashboardpack.com/architectui-html-pro/index.html

-->
	
	<?php include './includes/electricityStatus.php'; ?>


<?php include './includes/footer.php'; ?>
