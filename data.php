<?php
$url="https://thingspeak.com/channels/962789/field/1.json";
$homepage = file_get_contents($url);
echo $homepage;
$json = json_decode($homepage,true);
$conn = mysqli_connect('localhost','root','','iicdc');
$c=$json['channel'];
echo $c['name']."<br>".$c['description'];
$f=['feeds'];
print_r($c);

?>