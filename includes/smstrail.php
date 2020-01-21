<?php
session_start(); 
$connect1 = mysqli_connect("localhost", "root", "", "iicdc");  
$cquery1 = "SELECT * from user WHERE userid='$_SESSION[userid]' ";   
$cresult1 = mysqli_query($connect1, $cquery1);
           while($row = mysqli_fetch_array($cresult1))  
                          {  
                               $mbn= $row["mobileno"];  
                          }
$msg="finally, did it";
echo $mbn;
echo $msg;
    // Authorisation details.
    $username = "abakshay90@gmail.com";
    $hash = "38aff76e363f3e64a8f62eae026ebe5dac9c4231027752267f4c80bdecd8ebf2";

    // Config variables. Consult http://api.textlocal.in/docs for more info.
    $test = "0";

    // Data for text message. This is the text message data.
    $sender = "TXTLCL"; // This is who the message appears to be from.
    $numbers = "$mbn"; // A single number or a comma-seperated list of numbers
    $message = "$msg";
    // 612 chars or less
    // A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
    $ch = curl_init('http://api.textlocal.in/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
?>

