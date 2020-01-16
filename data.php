<?php
$url="./json/warehouse.json";
$json = file_get_contents($url);
$json = json_decode($json,true);
$conn = mysqli_connect('localhost','root','','iicdc');
$t=$json['temperature'];
$v=$json['vibration'];
$h=$json['humidity'];
$g=$json['Gas_sensor'];
$f=$json['IR_flame_sensor'];
echo "<br>temperature:".$t;
echo "<br>vibration:".$v;
echo "<br>humidity:".$h;
echo "<br>Gas sensor:".$g;
echo "<br>IR flame sensor:".$f;
$sql = "INSERT INTO sensors (temperature,vibration,humidity,gas,flame)VALUES (".$t.",".$v.",".$h.",".$g.",'".$f."')";
mysqli_query($conn,$sql)
	

?>