<?php
function resultAccessor()
{
	include_once "../model/connect.php";
	$userid = $_SESSION['userid'];

	//Search
	$query = "SELECT * FROM `result` WHERE `userid` = '$userid'";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result)){
	    $row = mysqli_fetch_array($result);
	    $_SESSION['web-technology'] = $row['web-technology'];
	    $_SESSION['research-methodology'] = $row['research-methodology'];
	    $_SESSION['data-communication'] = $row['data-communication'];
	}
}
?>