<?php

$post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
    'From'   => '7972481055',
    'To'    => '8605021269',
    'Body'  => 'This is Alert Message your warehouse in danger', //Incase you are wondering who Dr. Rajasekhar is http://en.wikipedia.org/wiki/Dr._Rajasekhar_(actor)
);
 
// You can get your $exotel_sid, $api_key and $api_token from: https://my.exotel.com/apisettings/site#api-credentials 
$api_key = "fe41287d158572b6ce3cb2d77733bcee11cb86959c70b8fa"; // Your `API KEY`.
$api_token = "4d86d585fdcb929417e6adce123ab5417edaf3067e74d4d1"; // Your `API TOKEN`
$exotel_sid = "student745"; // Your `Account Sid`
 
$url = "https://".$api_key.":".$api_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 
print "Response = ".print_r($http_result);

?>
