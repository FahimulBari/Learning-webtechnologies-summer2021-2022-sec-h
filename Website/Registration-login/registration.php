<?php
$Username = ucfirst(strtolower($_REQUEST['username']));
$UserID = $_REQUEST['userid'];
$Password = $_REQUEST['password'];


if(empty($Username)||empty($UserID)||empty($Password)){
	echo "Null Input";
}
else{
$url ='../Data/users.txt';
$file = fopen($url, "a");
fwrite($file,$Username."<.>".$UserID."<.>".$Password."<.>"."\n");
fclose($file);

//User Results
$url = '../Data/Results/'.$Username.$UserID.'.txt';
header("location: ../Course/result-generator.php?url=".$url);
}
?>