<?php
session_start();
$UserID = $_SESSION['userid'];
$CurrentPassword = $_REQUEST['cpassword'];
$NewPassword = $_REQUEST['npassword'];

if(empty($CurrentPassword) || empty($NewPassword)) {
	echo "Please Give Value";
	return;
}


$url = "../Data/users.txt";
$file = file($url);

if($file){
	foreach ($file as $line) {		
		$array = explode("<.>", $line);
		if($UserID == $array[1]) {
			if($CurrentPassword == $array[2]) {			
				$newline = str_replace("<.>".$CurrentPassword."<.>","<.>".$NewPassword."<.>", $line);
				$updatedfile =  str_replace($line, $newline, $file);
				file_put_contents($url, $updatedfile); 
?>

<html>
<head>
	<title>Password Change</title>
</head>
<body>
<h3>Password Updated</h3>
Do you want to logout?<br>
<a href="../Registration-login/logout.php">Yes</a><br>
<a href="../Home/home.php">No</a>
</body>
</html>
				
<?php			
            	break;
            }else{
				echo "Invalid Password";
			}
    	}
	}
}
?>