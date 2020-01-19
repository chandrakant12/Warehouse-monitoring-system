<?php
    error_reporting(0);
    //include "connection.php";
    $dt = date("Y-m-d");
    $tim = date("H:i:s");
    session_start();
    include './includes/connection.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>warehouse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="layout/styles/layout.css" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet"></head>
    <style type="text/css"> 
        body{
            background: linear-gradient(to right, #FFFFFF, #DCD6D1); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
    </style>

<body>



<nav class="nav aqua-gradient py-4 font-weight-bold z-depth-1 navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CWC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutUs.php">About Us</a>
            </li>        
            
            <?php
            if(!isset($_SESSION[userid]))
            {
                ?>        
                <!--
                <li class="nav-item">
                    <a class="nav-link" href="userAppointment.php">Online Appointment</a>
                </li>
                -->
                <li class="nav-item">
                    <a class="nav-link" href="userLogin.php">Login</a>
                </li>        
                <li class="nav-item">
                    <a class="nav-link" href="userRegister.php">Registration</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="stats.php">statistics</a>
                </li>-->
            
            
                <?php
            }
            else if (isset($_SESSION[userid]))
            {
                ?>
                <!--
                <li class="nav-item">
                    <a class="nav-link" href="userAppointment.php">Online Appointment</a>
                </li>
                -->
                <?php
            }
            ?>        
            <!--
            <li class="nav-item">
                <a class="nav-link" href="contactUs.php">Contact US</a>
            </li>


            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            -->
        </ul><!-- 
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn heavy-rain-gradient btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
</nav>



<div style="text-align:center">
   <?php include './includes/menu.php'; ?>
</div>

