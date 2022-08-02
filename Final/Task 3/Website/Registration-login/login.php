<?php
$UserID = $_REQUEST['userid'];
$Password = $_REQUEST['password'];
$IsFound = false;

if(empty($UserID) || empty($Password)){
	echo "Please Give Value";
	return;
}

$url = '../Data/users.txt';
$file = fopen($url, "r");
if($file){
	while (($line = fgets($file)) != false) {
		$array = explode("<.>", $line);

		if($UserID == $array[1]){
			if($Password == $array[2]){

				session_start();
				$_SESSION['username'] = $array[0];
				$_SESSION['userid'] = $array[1];
				$_SESSION['password'] = $array[2];
				$_SESSION['major'] = trim($array[3]);

				header('location: ../Home/home.php');
				setcookie("status",true,time()+3600,"/");
			}else{
				echo "Incorrect Password";
			}

			$IsFound = true;
			break;
		}
	}

	if(!$IsFound){ echo "User Not Found";}
}	



?>