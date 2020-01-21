
<?php
    // Account details
$apiKey = urlencode('K8Lyoe465w0-R2pcP5sZg6e9Y8eg88f2NWbF8q84s2');
    // Message details
$numbers = array(8605021269, 7972481055);
$sender = urlencode('TXTLCL');
$message = rawurlencode('Alert message of warehouse');

$numbers = implode(',', $numbers);

    // Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
    // Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
    // Process your response here
echo $response;
?>
