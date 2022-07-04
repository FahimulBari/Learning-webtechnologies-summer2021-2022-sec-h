<?php
session_start();

if(isset($_REQUEST['major'])){
	$_SESSION['major'] = $_REQUEST['major']; 
}
else{ 
echo "Please Select An Option"; 
return;
}

$url = '../Data/users.txt';
$file = file($url);

$search = $_SESSION['username'].'<.>'.$_SESSION['userid'].'<.>'.$_SESSION['password'];
$replace = $search.'<.>'.$_SESSION['major'];

$updatedfile = str_replace($search, $replace, $file);
file_put_contents($url, $updatedfile);

header('location: ../Home/home.php');
?>