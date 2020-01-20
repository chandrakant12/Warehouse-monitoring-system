<!--   $apiKey = urlencode('K8Lyoe465w0-WHC1Bfa5aYkR8OOV9ZZhhH1m0wgp9k');
    // Message details   K8Lyoe465w0-WHC1Bfa5aYkR8OOV9ZZhhH1m0wgp9k
    $numbers = array(917972481055);
    $sender = urlencode('TXTLCL');
    $message = rawurlencode('This is alert message');
     
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
    ?>-->


    <?php
    // Account details
    $apiKey = urlencode('K8Lyoe465w0-WHC1Bfa5aYkR8OOV9ZZhhH1m0wgp9k');
    // Message details
    $numbers = array(919284120220, 917972481055);
    $sender = urlencode("TXTLCL");
    $message = rawurlencode("This is your message");
     
    $numbers = implode(',', $numbers);
     
    // Prepare data for POST request
    $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
    // Send the POST request with cURL
    $ch = curl_init("https://api.textlocal.in/send/");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    // Process your response here
    echo $response;
    ?>
