<?php 
session_start(); 
//for graph one 
 $connect = mysqli_connect("localhost", "root", "", "ktm");  
 $cquery = "SELECT * FROM `account` where userid= 7";  
 $cresult = mysqli_query($connect, $cquery);  
//for graph two
 $connect1 = mysqli_connect("localhost", "root", "", "iicdc");  
 $cquery1 = "SELECT * FROM `sensors` where 1 ";  
  $gasd = "SELECT * FROM `sensors` where 1 ";  

 $cresult1 = mysqli_query($connect1, $cquery1);  
  $cresult3 = mysqli_query($connect1, $cquery1); 
    $gas = mysqli_query($connect1, $cquery1); 
    $gas1 = mysqli_query($connect1, $cquery1); 
?>


