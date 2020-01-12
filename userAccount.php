<?php    include './includes/header.php'; ?>
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

<br>
<div class="container">
    <h2>User Account</h2>
</div>
<div class="container">
    <h4>This account is registered under <?php echo $rspatient[patientname]; ?> </h4>
    <h4>You have Registered on <?php echo $rspatient[admissiondate]; ?> <?php echo $rspatient[admissiontime]; ?></h4>


    <!--
    <?php
    if(mysqli_num_rows($qsqlpatientappointment) == 0)
    {
        ?>
        <h4>Appointment records not found.. </h4>
        <?php
    }
    else
    {
        ?>    
        <h4>Last Appointment taken on - <?php echo $rspatientappointment[appointmentdate]; ?> <?php echo $rspatientappointment[appointmenttime]; ?> </h4>
        <?php
    }
    ?>  
    -->
        
    <br>

    <div class="jumbotron text-center hoverable p-4">
        <div class="row">
            <div class="col-md-4 offset-md-1 mx-3 my-3">
                <div class="view overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
            </div>
            <div class="col-md-7 text-md-left ml-3 mt-3">
                <a href="#!" class="green-text">
                    <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i> Work</h6>
                </a>
                <h4 class="h4 mb-4">Current Electricity Status</h4>
                <p class="font-weight-normal">Get to know the live status of electricity in yout region.</p>
                <a href="userElectricityStatus.php" class="btn btn-success">Read more</a>
            </div>
        </div>
    </div>


</div>

<?php include './includes/footer.php'; ?>