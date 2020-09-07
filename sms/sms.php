<?php
//post
$url="https://www.sms4india.com/api/v1/sendCampaign";
$message = urlencode("trying my best");// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=[89YCT58YYZMK45C4IY7K7A2YN2OVYDXD]&secret=[IOO5318FYJG0NEG4]&usetype=[stage]&phone=[7972481055]&senderid=[active-sender-id]&message=[$message]");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;
?>