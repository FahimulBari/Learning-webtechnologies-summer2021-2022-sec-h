<?php
$UserID = $_REQUEST['userid'];
$Password = $_REQUEST['password'];
$SavedPassword ="";
$UserType = "";



if(!isset($UserID) || !isset($Password))
{
	echo "Invalid Input. Try Again!";
}
else{

$lines = readfile($UserID.".txt");

for ($i=1; $i < 3 ; $i++) { 
	if($i == 1) $SavedPassword = substr($lines, strpos($lines, ":") + 1);
	if($i == 2) $UserType = substr($lines, strpos($lines, ":") + 1);

}

echo "<br>".$SavedPassword;

if($Password == $SavedPassword){

if($UserType == "Admin"){
setcookie('status','true',time()+3600,'/');
header('location: admin.php');

}else{
if($UserType == "User"){
setcookie('status','true',time()+3600,'/');
header('location: user.php');
}
}

}else{
	echo "Wrong Password";
}

}
?>