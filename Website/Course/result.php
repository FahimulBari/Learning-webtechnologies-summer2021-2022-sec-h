<?php
session_start();

echo "<h1>Result - ".$_SESSION['username']."</h1>";

$url = '../Data/Results/'.$_SESSION['username'].$_SESSION['userid'].'.txt';
$file = fopen($url, 'r');
if($file){
while (($line = fgets($file)) != false) {
	$array = explode('<.>', $line);
    echo $array[0]." - ".$array[1]."<br>";
}
}

fclose($file);
?>