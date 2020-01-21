<?php
	echo "line 1";
    //$command = escapeshellcmd('python3 /opt/lampp/htdocs/ml/testTempHour.py');
    $command = escapeshellcmd('python3 test.py');
	$output = shell_exec($command);
	echo $output;
?>