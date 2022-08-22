<?php
    include_once "connect.php";

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    //Search Code
    $query = "SELECT * FROM `student` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)){ echo true; }
    else{ echo false; }

    $conn->close();
?>