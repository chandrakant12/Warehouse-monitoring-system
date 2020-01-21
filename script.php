<?php 

$command = escapeshellcmd('./python/data.py');
$output = shell_exec($command);
echo $output;

?>