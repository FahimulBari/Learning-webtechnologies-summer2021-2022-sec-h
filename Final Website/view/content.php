<?php
if(isset($_COOKIE['status'])){
include_once "../model/content-accessor.php";
session_start();
$url = $_REQUEST['url'];
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="html-fetcher.js"></script>
	<title>Content</title>
</head>
<body>
<header id="header"></header>
<div class="centralize box">
<?php generateAccessLink($url) ?>
</div>
</body>
<script>fetchHeader();</script>	
</html>
<?php
}else{
echo "Login again!";
}
?>