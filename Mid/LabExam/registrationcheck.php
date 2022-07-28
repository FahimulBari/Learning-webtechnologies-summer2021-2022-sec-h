<?php
session_start();

$UserID = $_REQUEST['userid'];
$Password = $_REQUEST['password'];
$ConfirmPassword = $_REQUEST['cpassword'];
$Name = $_REQUEST['username'];
$UserType = isset($_REQUEST['usertype'])?$_REQUEST['usertype']:"";

if(!isset($UserID) || !isset($Password) || !isset($ConfirmPassword) || !isset($Name) || !isset($UserType) || $Password != $ConfirmPassword)
{
	echo "Invalid Input. Try Again!";
}
else{
$file = fopen($UserID.".txt", "w");

if($UserType == "User") {$UserType = "User"; }
else{$UserType = "Admin"; }

fwrite($file,"userid:".$UserID."\npassword:".$Password."\nusertype:".$UserType);

fclose($file);

echo "<h1>Successfully Signed Up</h1><br>";
?>

<html>
<head>
	<title>Registration Check</title>
</head>
<body>
    <a href="signin.html">Sign In</a>
</body>
</html>

<?php
}
?>