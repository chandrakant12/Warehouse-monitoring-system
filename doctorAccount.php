<?php

include './includes/header.php';  

if(!isset($_SESSION[doctorid]))
{
    echo "<script>window.location='msebLogin.php';</script>";
}

?>
<div class="container">
    <br>
    <h4>Staff Account</h4>
    <br>
    <div class="container">
        <h3>Welcome <?php echo $rsdoctorprofile[doctorname]; ?> </h3>
        <h3>Number of Appointment Records : 
            <?php
            $sql = "SELECT * FROM appointment WHERE status='Active'";
            $qsql = mysqli_query($conn,$sql);
            echo mysqli_num_rows($qsql);
            ?>
        </h3>
        <h3>Number of User Records : 
            <?php
            $sql = "SELECT * FROM user WHERE status='Active'";
            $qsql = mysqli_query($conn,$sql);
            echo mysqli_num_rows($qsql);
            ?>
        </h3>
    </div>
    <br>
</div>


<?php include './includes/footer.php';?>