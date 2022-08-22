<?php
	session_start();
	session_unset();
	session_destroy();
	setcookie("status",false,time()-3600,"/");
	header("location: ../view/Login.html");
?>