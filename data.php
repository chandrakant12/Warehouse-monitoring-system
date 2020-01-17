<?php
$url="https://thingspeak.com/channels/962789/feed.json";
$json = file_get_contents($url);
$json = json_decode($json,true);
$conn = mysqli_connect('localhost','root','','iicdc');
/*$t=$json['temperature'];
$v=$json['vibration'];
$h=$json['humidity'];
$g=$json['Gas_sensor'];
$f=$json['IR_flame_sensor'];
echo "<br>temperature:".$t;
echo "<br>vibration:".$v;
echo "<br>humidity:".$h;
echo "<br>Gas sensor:".$g;
echo "<br>IR flame sensor:".$f;*/
$c=$json['feeds'];
foreach ($c as $key => $value) {
	$sql = "INSERT INTO sensors (temperature,vibration,humidity,gas,flame)VALUES (".$c[$key]['field1'].",".$c[$key]['field2'].",".$c[$key]['field3'].",".$c[$key]['field4'].",'".$c[$key]['field5']."')";
mysqli_query($conn,$sql);
}


?>