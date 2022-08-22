<?php
if(isset($_COOKIE['status'])){
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="html-fetcher.js"></script>
	<title>Home</title>
</head>
<body>
<header id="header"></header>
<div class="centralize box">
	<h1 class="title" >Welcome Home, <?php echo ucfirst(strtolower($_SESSION['username']));?></h1>
	<h3 style="padding:10px;">Userid: <?php echo $_SESSION['userid']; ?></h3>
	<h3 style="padding:10px;">Username: <?php echo $_SESSION['username']; ?></h3>
	<h3 style="padding:10px;">Major: <?php 
	if($_SESSION['major'] != ''){ echo $_SESSION['major']; }
	else{echo "Not Declared"; }
	?></h3> 
</div>
<script>fetchHeader();</script>
</body>
</html>
<?php
}else{
echo "Login again!";
}
?>
