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
	<script src="../controller/major.js"></script>
	<title>Major Declare</title>
</head>
<body>
<header id="header"></header>
<?php if($_SESSION['major'] == ""){?>	
<div id="major-empty" class="centralize box">
	<h1 class="title font-space">Major Declare</h1>
	<button id="major-se" class="button space" onclick="majorDeclare('major-se');">Software Engineering</button>
	<button id="major-ct" class="button space" onclick="majorDeclare('major-ct');">Computational Theory</button>
	<button id="major-ce" class="button space" onclick="majorDeclare('major-ce');">Computer Engineering</button>
	<button id="major-is" class="button space" onclick="majorDeclare('major-is');">Information Systems</button>
</div>
<div id="major-declared" class="centralize box disable">
	<h1 id="major" class="title"></h1>
	<h4>You have declared your major. Thank you!</h4>
</div>
<?php }else{ ?>
<div class="centralize box">
	<h1 class="title"><?php echo $_SESSION['major']; ?></h1>
	<h4>You have declared your major. Thank you!</h4>
</div>
<?php } ?>
<script>fetchHeader();</script>	
</body>
</html>
<?php
}else{
echo "Login again!";
}
?>