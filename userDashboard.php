<?php include'./includes/header.php' ;

    if(isset($_SESSION[userid]))
    {
        $sql="SELECT * FROM user WHERE userid='$_SESSION[userid]' ";
        $qsql = mysqli_query($conn,$sql);
        $rsedit = mysqli_fetch_array($qsql);
    }

?>



<div class="container-fluid">

    <div class="row">
        
        <?php
        /*
        <nav class=" col-md-2 d-none d-md-block sunny-morning-gradient sidebar">
            <br>
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
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
                            New User
                        </a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Integrations
                        </a>
                    </li>
                    -->
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
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                    -->
                </ul>
            </div>
        </nav>
        */
        ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <style type="text/css">
                h1,h2,h3,h4{
                    color: #6D6C6B;
                    font-family: Montserrat;
                }
            </style>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <?php include './includes/clock.php' ?>
            </div>

           <!--  <?php
                include './includes/connection.php';
                $sql = "SELECT * FROM admin_users WHERE id_admin = " . $_SESSION['adminId'] . ";";
                $result = mysqli_query($conn, $sql);
                $data = mysqli_fetch_assoc($result);
                $dob = $data['dateOfBirth'];
                $deg = $data['degree'];
                $email = $data['email_admin'];
            ?> -->
            <h2>Hello <?php echo $rsedit[username]; ?></h2>
            <h4>Personal Details</h4>
            <h4>Date Of Birth : <?php echo $rsedit[dob]; ?></h4>
            <h4>Area : <?php echo $rsedit[address]; ?></h4>
            <!--<h4>Email Id : adityaspmahajan@gmail.com<?php echo $email; ?></h4>-->

            <hr>

            <?php
            /*
            <!-- SUMMARY  -->
            <h2>Summary</h2>
            <?php 
                include './includes/connection.php';
            ?>
            <div class="row">
                &emsp;
                <div class="card text-white bg-primary mb-3 col-sm" style="max-width: 18rem;">
                    <div class="card-header">Today's Summary</div>
                    <div class="card-body">
                        <h5 class="card-title"> New Bill : <?php echo $todayNewCount; ?> </h5>
                        <h5 class="card-title"> Follow Ups : <?php echo $todayFollowCount; ?></h5>
                        <p class="card-text">  : <?php echo $todayEarnCount; ?></p>
                    </div>
                </div>
                &emsp;
                <div class="card text-white bg-secondary mb-3 col-sm" style="max-width: 18rem;">
                    <div class="card-header">Week's Summary</div>
                    <div class="card-body">
                        <h5 class="card-title"> New Bill : <?php echo $weekNewCount; ?></h5>
                        <h5 class="card-title"> Follow Ups : <?php echo $weekFollowCount; ?></h5>
                        <p class="card-text">  : <?php echo $weekEarnCount; ?></p>
                    </div>
                </div>
                &emsp;
                <div class="card text-white bg-success mb-3 col-sm" style="max-width: 18rem;">
                    <div class="card-header">Month's Summary</div>
                    <div class="card-body">
                        <h5 class="card-title"> New Bill : <?php echo $monthNewCount; ?></h5>
                        <h5 class="card-title"> Follow Ups : <?php echo $monthFollowCount; ?></h5>
                        <p class="card-text">  : <?php echo $monthEarnCount; ?></p>
                    </div>
                </div>
                &emsp;
                <div class="card text-white bg-warning mb-3 col-sm" style="max-width: 18rem;">
                    <div class="card-header">Year's Summary</div>
                    <div class="card-body">
                        <h5 class="card-title"> New Bill : <?php echo $yearNewCount; ?></h5>
                        <h5 class="card-title"> Follow Ups : <?php echo $yearFollowCount; ?></h5>
                        <p class="card-text">  : <?php echo $yearEarnCount; ?></p>
                    </div>
                </div>
            </div><hr>

            <!--
            <canvas class="my-4 w-100" id="myChart" width="450" height="190"></canvas>
            -->
            
            <h2>Bill Added Last Week</h2>
            <hr>
            */
            ?>

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
            <hr>
        </main>
    </div>
</div>

<?php include './includes/footer.php'; ?>