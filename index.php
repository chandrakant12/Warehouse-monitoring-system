<?php include './includes/header.php'; ?>

<style type="text/css">
    .sideCol{
        display: none;
    }
    @media(min-width: 992px){
        .sideCol{ display: block; }
    }
    .jumbo{
        padding-top: 3vh;
        max-height: 23vh;
    }
    .news{
        font-size: 9pt;
    }
    .crousel-height{
        max-height: 400px;
    }
    @media(max-width: 830px){
        .heading-text{
            font-size: 20pt;
        }
    }
</style>


<div class="jumbotron jumbo text-center" style="margin-bottom:0">
    <div class="row">
        <div class="col-4 text-left">
            <img class="img-fluid" src="./images/cwc_logo.jpg">
        </div>
        <div class="col-8 text-right ">
            <h1 class="heading-text">Maharashtra State Electricity Distribution Co. Ltd.</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <br>


            <!--Carousel Wrapper-->
            <div id="carousel-example-1z" class="carousel slide carousel-fade " data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner crousel-height" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://www.rd.com/wp-content/uploads/2011/08/electricity.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <!--/First slide-->
                    <!--Second slide-->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSZNtOx6z7avMQBry47F48vq72L97PClDB_6PAH6niQNpBtPF8D" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <!--/Second slide-->
                    <!--Third slide-->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://bartica.gov.gy/wp-content/uploads/2018/06/Energized_electric_grid_XL_721_420_80_s_c11.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <!--/Third slide-->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->



            <div class="container">  
                <br>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <!-- News jumbotron -->
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
                            <a href="#" class="green-text">
                                <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i> Work</h6>
                            </a>
                            <h4 class="h4 mb-4">Current Electricity Status</h4>
                            <p class="font-weight-normal">Get to know the live status of electricity in yout region.</p>
                            <a href="userElectricityStatus.php" class="btn btn-success">Read more</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


        <div class="col-sm-4 sideCol">
            <br>
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <a href="adminLogin.php"><li class="list-group-item">Admin Login</li></a><!--
                    <a href="msebLogin.php"><li class="list-group-item">MSEB Login</li></a>
                    -->
                    <a href="userLogin.php"><li class="list-group-item">User Login</li></a>
                    <li class="list-group-item">Login</li>
                </ul>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush news">
                    <li class="list-group-item"><h3>Latest News</h3></li>
                    <a href="#"><li class="list-group-item">SELECT LIST FOR THE POST OF DEPUTY EXECUTIVE ENGINEER (DIST.) ADVERTISED VIDE ADVT. NO. 07... -- September 5, 2019
                    </li></a>
                    <a href="#"><li class="list-group-item">Document Verification Program on Second Occasion For the post of Graduate Engineer Traine... -- August 31, 2019
                    </li></a>
                    <a href="#"><li class="list-group-item">REVISED ALFA LIST OF CANDIDATES APPLIED FOR THE POST OF UPKENDRA SAHAYYAK VIDE ADVT. NO. 0... -- August 21, 2019
                    </li></a>
                    <a href="#"><li class="list-group-item">MSEDCL Advt. No.06/2019 for the post of Graduate Engineer-Trainee(Civil.) and Diploma Engi... -- August 21, 2019
                    </li></a>
                    <a href="#"><li class="list-group-item">INTERNAL NOTIFICATION FOR THE POST OF GRADUATE ENGINEER -TRAINEE (CIVIL) AND DIPLOMA ENGIN... -- August 21, 2019
                    </li></a>
                    <a href="#"><li class="list-group-item">Document Verification Programme For the post of Graduate Engineer Trainee (GET) & Diploma... -- August 20, 2019
                    </li></a>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include './includes/footer.php'; ?>