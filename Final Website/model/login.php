<?php
	include_once "connect.php";

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $query = "SELECT * FROM `student` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)){ 
    	session_start();

    	$row = mysqli_fetch_array($result);
    	$_SESSION['userid'] = $row['userid'];
    	$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
        $_SESSION['major'] = $row['major'];


        $conn->close();

		header('location: ../view/home.php?log=success');
		setcookie("status",true,time()+3600,"/");
    }

?>