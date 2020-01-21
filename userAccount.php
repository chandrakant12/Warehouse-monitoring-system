<?php    include './includes/header.php'; ?>
<?

    if(isset($_SESSION[userid]))
    {
        $sql="SELECT * FROM user WHERE userid='$_SESSION[userid]' ";
        $qsql = mysqli_query($conn,$sql);
        $rsedit = mysqli_fetch_array($qsql);
    }

?>





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

<br>
<!--<div class="container">
    <h2>User Account</h2>
</div>-->
<div class="container jumbotron text-left hoverable p-4">
    <div class="row">
        <div class="col">
     <h2>User Account</h2>

    <h4>This account is registered under <?php echo $rsuser[username]; ?> </h4>
    <h4>You have Registered on <?php echo $rsuser[admissiondate]; ?> <?php echo $rsuser[admissiontime]; ?></h4>
    <br>
    <h2>Hello <?php echo $rsuser[username]; ?></h2>
            <h4>Personal Details</h4>
            <h4>Date Of Birth : <?php echo $rsuser[dob]; ?></h4>
            <h4>Area : <?php echo $rsuser[address]; ?></h4>
 </div>
 <div class="col">
<h3> live streaming options :</h3>
<a href="https://www.youtube.com/">
<button class="btn btn-danger"> watch youtube stream </button>
</a>
<br>
  <button class="btn btn-warning">watch localstream </button>
</div>

</div>
</div>
    <!--
    <?php
    //if(mysqli_num_rows($qsqluserappointment) == 0)
    {
        ?>
        <h4>Appointment records not found.. </h4>
        <?php
    }
    //else
    {
        ?>    
        <h4>Last Appointment taken on - <?php //echo $rsuserappointment[appointmentdate]; ?> <?php //echo $rsuserappointment[appointmenttime]; ?> </h4>
        <?php
    }
    ?>  
    -->
        
    <br>
    <!--<div class="row">
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <style type="text/css">
                h1,h2,h3,h4{
                    color: #6D6C6B;
                    font-family: Montserrat;
                }
            </style>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-left pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"></h1>
                <?php //include './includes/clock.php' ?>
            </div>-->

           <!--  <?php
                //include './includes/connection.php';
                $sql = "SELECT * FROM admin_users WHERE id_admin = " . $_SESSION['adminId'] . ";";
                $result = mysqli_query($conn, $sql);
                $data = mysqli_fetch_assoc($result);
                $dob = $data['dateOfBirth'];
                $deg = $data['degree'];
                $email = $data['email_admin'];
            ?> -->
           <!-- <h2>Hello <?php echo $rsuser[username]; ?></h2>
            <h4>Personal Details</h4>
            <h4>Date Of Birth : <?php echo $rsuser[dob]; ?></h4>
            <h4>Area : <?php echo $rsuser[address]; ?></h4>-->
            <!--<h4>Email Id : adityaspmahajan@gmail.com<?php echo $email; ?></h4>-->



    <div class="container jumbotron text-center hoverable p-4">
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
                <h4 class="h4 mb-4">Current Climate Status</h4>
                <p class="font-weight-normal">Get to know the live status of electricity in yout region.</p>
                <a href="userElectricityStatus.php" class="btn btn-success">Read more</a>
            </div>
        </div>
</div>


<div class="container text-center">

            <h2>Contact Us</h2>
            <!--Facebook-->
            <a class="btn-floating btn-lg btn-fb btn-success" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a class="btn-floating btn-lg btn-tw info-color " type="button" role="button"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a class="btn-floating btn-lg btn-gplus danger-color" type="button" role="button"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a class="btn-floating btn-lg btn-li info-color" type="button" role="button"><i class="fab fa-linkedin-in"></i></a>
            <!--Instagram-->
            <a class="btn-floating btn-lg btn-ins red" type="button" role="button"><i class="fab fa-instagram"></i></a>
            <!--Pinterest-->
            <a class="btn-floating btn-lg btn-pin danger-color" type="button" role="button"><i class="fab fa-pinterest"></i></a>
            <!--Vkontakte-->
            <a class="btn-floating btn-lg btn-vk warning-color" type="button" role="button"><i class="fab fa-vk"></i></a>
            <!--Stack Overflow-->
            <a class="btn-floating btn-lg btn-so orange" type="button" role="button"><i class="fab fa-stack-overflow"></i></a>
            <!--Youtube-->
            <a class="btn-floating btn-lg btn-yt danger-color" type="button" role="button"><i class="fab fa-youtube"></i></a>
            <!--Slack-->
            <a class="btn-floating btn-lg btn-slack pink" type="button" role="button"><i class="fab fa-slack-hash"></i></a>
            <!--Github-->
            <a class="btn-floating btn-lg btn-git brown" type="button" role="button"><i class="fab fa-github"></i></a>
            <!--Comments-->
            <a class="btn-floating btn-lg btn-comm warning-color" type="button" role="button"><i class="fas fa-comments"></i></a>
            <!--Email-->
            <a class="btn-floating btn-lg btn-email red" type="button" role="button"><i class="fas fa-envelope"></i></a>
            <!--Dribbble-->
            <a class="btn-floating btn-lg btn-dribbble blue" type="button" role="button"><i class="fab fa-dribbble"></i></a>
            <!--Reddit-->
            <a class="btn-floating btn-lg btn-reddit red" type="button" role="button"><i class="fab fa-reddit-alien"></i></a>
            </div>
            <br><br>
        </div>
    </div>

</div>
<?php include './includes/footer.php'; ?>