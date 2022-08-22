<?php
	include_once "connect.php";

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

	//Insert
    $query = "INSERT INTO `student` (`userid`, `username`, `password`, `major`) VALUES (NULL, '$username', '$password', '')";
    mysqli_query($conn, $query);

    //Search
    $query = "SELECT * FROM `student` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_array($result);
        $userid = $row['userid'];
    }

    //Insert
    $query = "INSERT INTO `result` (`id`, `userid`, `web-technology`, `research-methodology`, `data-communication`) VALUES (NULL, '$userid', 'D', 'D', 'D')";
    mysqli_query($conn, $query);

    $conn->close();

    header('location: ../view/login.html?reg=success');
?>