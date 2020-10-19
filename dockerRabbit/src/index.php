<?php


echo "DevOps course 2020 fall";
echo '<br>';

$filename = "http://localhost:8080/thefile";
$handle = fopen($filename, "r") or die("Unable to open file!");
$contents = fread($handle, filesize($filename));
fclose($handle);


?>
