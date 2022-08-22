<?php
    if(isset($_COOKIE['status'])){
    session_start();

	include_once "connect.php";

    $username = $_SESSION['username'];
    $_SESSION['major'] = $_REQUEST['major'];
    $major = $_SESSION['major'];

	//Update
    $query = "UPDATE `student` SET `major` = '$major' WHERE `student`.`username` = '$username'";
    mysqli_query($conn, $query);
    echo $_SESSION['major'];

    $conn->close();
    }else{
        echo "Login again!";
    }
?>