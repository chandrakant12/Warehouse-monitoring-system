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
        max-height: 15vh;
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
            <h1 class="heading-text">Warehouse control and analyzer unit</h1>
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
                        <img class="d-block w-140" src="https://logisticsinsider.in/wp-content/uploads/2019/10/NWCC-Warehpuse-1280x640.jpg" alt="First slide">

                        <div class="carousel-caption d-none d-md-block">
                            <h5>warehouse data analysis </h5>
                            <p>We offer customised, comprehensive logistics services for sectors such as temperature , humidity,air quality and much more ... </p>
                        </div>
                    </div>
                    <!--/First slide
                       https://www.rd.com/wp-content/uploads/2011/08/electricity.jpg
                    -->
                    <!--Second slide-->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://interlakemecalux.cdnwm.com/blog/img/3d-chart-warehouse-layout-plan.1.1.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>perfect prediction for safety</h5>
                            <p>predicts temperature ,humidity,smoke for future decisions</p>
                        </div>
                    </div>
                    <!--/Second slide-->
                    <!--Third slide-->
                    <div class="carousel-item">
                        <img class="d-block w-100" src=" https://www.shiprocket.in/wp-content/uploads/2016/12/5-1.jpg" alt="Third slide">
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
                    Monitoring Warehouse Centers for Environmental Information is committed to the monitoring and assessment of the state of the Earth's climate in near real-time, providing decision-makers at all levels of the public and private sectors with data and information on climate trends and variability.

                </p>

                <p>
                    
                </p>

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
                            <h4 class="h4 mb-4">Current climate Status</h4>
                            <p class="font-weight-normal">Get to know the live status of electricity in your region.</p>
                            <a href="userElectricityStatus.php" class="btn btn-success">know more</a>
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