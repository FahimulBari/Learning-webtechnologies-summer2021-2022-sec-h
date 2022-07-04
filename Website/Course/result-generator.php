<?php
$url = $_REQUEST['url'];
$file = fopen($url, 'a');

$courses = array_diff(scandir('Content/'), array('.','..'));
foreach ($courses as $course) {
	$random_result = rand(70,100);
	fwrite($file, $course."<.>".$random_result."\n");
}

fclose($file);
header('location: ../Registration-login/login.html');
?>