<?php
    if(isset($_COOKIE['status'])){
    session_start();

	include_once "connect.php";

    $password = $_REQUEST['new-password'];
    $username = $_SESSION['username'];

	//Insert
    $query = "UPDATE `student` SET `password` = '$password' WHERE `student`.`username` = '$username'";
    mysqli_query($conn, $query);

    $conn->close();

    header('location: ../view/home.php?update=success');
    }else{
        echo "Login again!";
    }
?>