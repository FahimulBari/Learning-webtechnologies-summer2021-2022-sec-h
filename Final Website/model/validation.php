<?php
	include_once "connect.php";

    $username = $_REQUEST['username'];

    $query = "SELECT * FROM `student` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result)){ echo true; }
	else{ echo false; }

    $conn->close();
?>