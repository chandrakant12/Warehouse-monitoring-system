<link href="./css/analytics.css" rel="stylesheet">
<div class="app-container app-theme-white fixed-header ">
  <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu</li>
                            <li >
                                <a href="userDashboard.php">
                                    Dashboard
                                    <i class="metismenu-state-icon  caret-left">
                                        <img width="40px;" src="https://img.icons8.com/clouds/100/000000/box-important-3.png">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="userAccount.php">
                                    Account
                                    <i class="metismenu-state-icon  caret-left">
                                        <img width="25px;" src="https://img.icons8.com/dusk/100/000000/positive-dynamic.png">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Profile
                                    <i class="metismenu-state-icon  caret-left">
                                        <img width="30px;" src="https://img.icons8.com/color/48/000000/contract-job.png">
                                    </i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="userProfile.php">
                                            <i class="metismenu-icon"></i>
                                            View Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="userChangePassword.php">
                                            <i class="metismenu-icon">
                                            </i>Change Password
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="userElectricityStatus.php">
                                    Electricity Status
                                    <i class="metismenu-state-icon caret-left">
                                        <img width="30px" src="https://img.icons8.com/doodle/48/000000/car-battery.png">
                                    </i>
                                </a>
                            </li>
                    </div>
                </div>
            </div>    <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="">
                                    <i class=" icon-gradient bg-ripe-malin">
                                        <img src="https://img.icons8.com/color/48/000000/conflict.png">
                                    </i>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div>Electricity Status
                                    <div class="page-title-subheading">We are hear to make your life easy.
                                    </div>
                                </div>
                            </div>
                           <!--  <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        Buttons
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span>
                                                        Inbox
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Book
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span>
                                                        Picture
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a disabled class="nav-link disabled">
                                                    <i class="nav-link-icon lnr-file-empty"></i>
                                                    <span>
                                                        File Disabled
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  -->   </div>
                    </div> 

                    <div class="tabs-animation">
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Status Report</h5>
                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                            <div style="height: 227px;">
                                                <canvas id="line-chart"></canvas>
                                            </div>
                                        </div>
                                        <h5 class="card-title">Failure Probability</h5>
                                        <div class="mt-3 row">
                                            <div class="col-sm-12 col-md-4">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-numbers text-dark">65%</div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-progress-wrapper mt-1">
                                                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                                                            </div>
                                                            <div class="progress-sub-label">
                                                                <div class="sub-label-left font-size-md">Windings</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-numbers text-dark">22%</div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-progress-wrapper mt-1">
                                                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%;"></div>
                                                            </div>
                                                            <div class="progress-sub-label">
                                                                <div class="sub-label-left font-size-md">Oil</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-numbers text-dark">83%</div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-progress-wrapper mt-1">
                                                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%;"></div>
                                                            </div>
                                                            <div class="progress-sub-label">
                                                                <div class="sub-label-left font-size-md">Gases</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="main-card mb-3 card">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-primary"></div>
                                                        <i class="text-primary">
                                                            <img src="https://img.icons8.com/color/48/000000/temperature.png">
                                                        </i></div>
                                                    <div class="widget-numbers">45.8 C</div>
                                                    <div class="widget-subheading">Oil Temp</div>
                                                    <div class="widget-description text-success">
                                                        <i class="fa fa-angle-up"></i>
                                                        <span class="pl-1">175.5%</span></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-info"></div>
                                                        <i class="text-info">
                                                            <img style="width: 40px;" src="https://img.icons8.com/dusk/64/000000/temperature-sensitive.png">
                                                        </i>
                                                    </div>
                                                    <div class="widget-numbers">63.2 C</div>
                                                    <div class="widget-subheading">Windings temp</div>
                                                    <div class="widget-description text-info">
                                                        <i class="fa fa-arrow-right"></i>
                                                        <span class="pl-1">175.5%</span></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-danger"></div>
                                                        <i class="text-danger">
                                                            <img style="width:40px " src="https://img.icons8.com/dusk/64/000000/humidity.png">
                                                        </i>
                                                    </div>
                                                    <div class="widget-numbers">5.82 %</div>
                                                    <div class="widget-subheading">Humidity</div>
                                                    <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                                                        <i class="fa fa-angle-up"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover br-br">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-success"></div>
                                                        <i class="">
                                                            <img style="width: 50px;" src="https://img.icons8.com/clouds/100/000000/speed.png">
                                                        </i></div>
                                                    <div class="widget-numbers">17.2 m/ph</div>
                                                    <div class="widget-subheading">Wind speed</div>
                                                    <div class="widget-description text-warning"><span class="pr-1">175.5%</span>
                                                        <i class="fa fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



<div class="tabs-animation">
                        <div class="mb-3 card">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                                    warehouse Performance
                                </div>

                            </div>
                            <div class="no-gutters row">
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                            <i class="text-dark opacity-8">
                                                <img style="width: 55px;" src="https://img.icons8.com/clouds/100/000000/slot-machine.png">
                                            </i></div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">warehouse Repairs</div>
                                            <div class="widget-numbers">NO</div>
                                            <!-- <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline text-danger pr-1">
                                                    <i class="fa fa-angle-down"></i>
                                                    <span class="pl-1">54.1%</span>
                                                </div>
                                                less earnings
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                            <i class=" text-white">
                                                <img style="width:40px;" src="https://img.icons8.com/dusk/64/000000/power-strip.png">
                                            </i></div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">Power Cut Time</div>
                                            <div class="widget-numbers"><span>Not today</span></div>
                                            <!-- <div class="widget-description opacity-8 text-focus">
                                                Grow Rate:
                                                <span class="text-info pl-1">
                                                    <i class="fa fa-angle-down"></i>
                                                    <span class="pl-1">14.1%</span>
                                                </span>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                            <i class="text-white">
                                                <img style="width: 40px;" src="https://img.icons8.com/color/48/000000/switch-on--v2.png">
                                            </i></div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">Power</div>
                                            <div class="widget-numbers text-success"><span>ON</span></div>
                                           <!--  <div class="widget-description text-focus">
                                                Increased by
                                                <span class="text-warning pl-1">
                                                    <i class="fa fa-angle-up"></i>
                                                    <span class="pl-1">7.35%</span>
                                                </span>
                                            </div>
 -->                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center d-block p-3 card-footer">
                                <div class="btn-pill btn-shadow btn-wide fsize-1 disabled btn btn-primary btn-lg">
                                    <span class="mr-2 opacity-7">
                                        <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                    </span>
                                    <span class="mr-1">Current electricity status</span>
                                </div>
                            </div>
                        </div>
                    </div>





















                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Technicians Report
                                        <i>
                                            &nbsp;<img style="width:45px;" src="https://img.icons8.com/nolan/64/000000/video-card.png">
                                        </i>
                                        <!-- 
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus">Last Week</button>
                                                <button class="btn btn-focus">All Month</button>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th width="20%" class="text-center">Status</th>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Mobile Number</th>
                                                <th class="text-center">Experience</th>
                                               <!--  <th class="text-center">Time</th>
                                                <th class="text-center">Actions</th> -->
                                            </tr>
                                            </thead>
                                            <tbody>


                                            <?php
                                            $sql ="SELECT * FROM staff";
                                            $qsql = mysqli_query($conn,$sql);
                                            while($rs = mysqli_fetch_array($qsql))
                                            {
                                                echo "<tr class=\"text-center\">
                                                <td>
                                                <strong><strong> Stat </strong>: $rs[status] </td>
                                                <td>
                                                <strong> <strong>$rs[staffname]</strong></strong>
                                                </td>
                                                <td>
                                                <strong>Mob No</strong> : $rs[mobileno]</td>
                                                <td><strong> $rs[experience] years</strong></td>
                                               
                                                </tr>";
                                            }
                                            ?>
                                            <!-- 
                                            <tr>
                                                <td class="text-center text-muted">#345</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Jhon doe </div>
                                                                <div class="widget-subheading opacity-7">Technitions</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">Nanded</td>
                                                <td class="text-center">
                                                    <div class="badge badge-warning">2 hours</div>
                                                </td>
                                                <td class="text-center" style="width: 150px;">
                                                    <div class="pie-sparkline">2,4,6,9,4</div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" herf="/opt/lampp/htdocs/iicdc website/includes/mjhondoe.php"class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-muted">#347</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Ruben Tillman</div>
                                                                <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">Berlin</td>
                                                <td class="text-center">
                                                    <div class="badge badge-success">1 hour</div>
                                                </td>
                                                <td class="text-center" style="width: 150px;">
                                                    <div id="sparkline-chart4"></div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-muted">#321</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Elliot Huber</div>
                                                                <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">London</td>
                                                <td class="text-center">
                                                    <div class="badge badge-danger">10 hours</div>
                                                </td>
                                                <td class="text-center" style="width: 150px;">
                                                    <div id="sparkline-chart8"></div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-muted">#55</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt=""></div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Vinnie Wagstaff</div>
                                                                <div class="widget-subheading opacity-7">UI Designer</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">Amsterdam</td>
                                                <td class="text-center">
                                                    <div class="badge badge-info">5 hours</div>
                                                </td>
                                                <td class="text-center" style="width: 150px;">
                                                    <div id="sparkline-chart9"></div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="d-block text-center card-footer">
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        
                        <!-- div class="row">
                            <div class="col-sm-12 col-lg-6 col-xl-4">
                                <div class="mb-3 profile-responsive card">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-dark">
                                            <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/abstract2.jpg');"></div>
                                            <div class="menu-header-content btn-pane-right">
                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                    <div class="avatar-icon rounded"><img src="assets/images/avatars/3.jpg" alt="Avatar 5"></div>
                                                </div>
                                                <div>
                                                    <h5 class="menu-header-title">Jeff Walberg</h5>
                                                    <h6 class="menu-header-subtitle">Lead UX Developer</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                    <button class="btn btn-success">View Profile</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="widget-content pt-1 pl-0 pr-0">
                                                <div class="text-center">
                                                    <h5 class="widget-heading opacity-4 mb-0">Month Totals</h5>
                                                    <h6 class="mt-3 mb-3">
                                                            <span class="pr-2">
                                                            <b class="text-danger">12</b> new leads,
                                                            </span>
                                                        <span><b class="text-success">$56.24</b> in sales</span>
                                                    </h6>
                                                    <button class="btn-wide btn-pill btn btn-outline-primary">Full Report</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-0 list-group-item">
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link">
                                                            <i class="lnr-license btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            View Profile
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link">
                                                            <i class="lnr-music-note btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            Leads Generated
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-4">
                                <div class="mb-3 profile-responsive card">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-dark">
                                            <div class="menu-header-image opacity-4" style="background-image: url('assets/images/dropdown-header/city1.jpg');"></div>
                                            <div class="menu-header-content btn-pane-right">
                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                    <div class="avatar-icon rounded">
                                                        <img src="assets/images/avatars/8.jpg" alt="Avatar 5">
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="menu-header-title">John Rosenberg</h5>
                                                    <h6 class="menu-header-subtitle">Short profile description</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                    <button type="button" class="btn-wide btn-shadow btn-pill btn btn-warning">Refresh</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="p-0 list-group-item">
                                            <div class="widget-content">
                                                <div class="text-center">
                                                    <canvas id="doughnut-chart-2"></canvas>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-0 list-group-item">
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <div class="p-1">
                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                                <i class="lnr-sun text-primary opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                View Profile
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="p-1">
                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                                <i class="lnr-magic-wand text-primary opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                View Leads
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12 col-xl-4">
                                <div class="mb-3 profile-responsive card">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-dark">
                                            <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/abstract3.jpg');"></div>
                                            <div class="menu-header-content btn-pane-right">
                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                    <div class="avatar-icon rounded">
                                                        <img src="assets/images/avatars/1.jpg" alt="Avatar 5"></div>
                                                </div>
                                                <div>
                                                    <h5 class="menu-header-title">Ruben Tillman</h5>
                                                    <h6 class="menu-header-subtitle">Etiam sit amet orci eget</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                    <button class="btn btn-success">View Profile</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="widget-content pt-4 pb-4 pr-1 pl-1">
                                                <div class="text-center">
                                                    <h5 class="mb-0">
                                                            <span class="pr-1">
                                                                <b class="text-danger">12</b> new leads,
                                                            </span>
                                                        <span><b class="text-success">$56.24</b> in sales</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-0 list-group-item">
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <div class="p-1">
                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                                <i class="lnr-lighter text-dark opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                Automation
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="p-1">
                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                                <i class="lnr-construction text-danger opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                Reports
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="p-1">
                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                                                <i class="lnr-bus text-success opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                Activity
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="p-1">
                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                                <i class="lnr-gift text-focus opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                Settings
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                   </div>
    </div>
</div>

<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="./js/analytics.js"></script></body>
</html>
