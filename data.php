<?php
$url="https://api.thingspeak.com/channels/946616/feeds.json?results=2";
$json = file_get_contents($url);
$json = json_decode($json,true);

echo $json['channel'];
?>