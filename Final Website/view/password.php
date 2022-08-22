<?php
if(isset($_COOKIE['status'])){
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="html-fetcher.js"></script>
	<script type="text/javascript" src="..\controller\password.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Password Change</title>
</head>
<body>
	<header id="header"></header>
	<form class="centralize box" method="Post" action="../model/update-password.php" onsubmit="return PasswordChange()">
		<h1 class="title">Password Change</h1>
		<input type="password" id="old-password" name="old-password" placeholder="Old Password" onkeyup="OldPaswordNullCheck()">
		<h4 id="old-password-warning" style="color: red"></h4>
		<input type="password" id="new-password" name="new-password" placeholder="New Password" onkeyup="NewPaswordNullCheck()">
		<h4 id="new-password-warning" style="color: red"></h4>
		<button type="submit">Continue</button>
	</form>
</body>

<script> 
	fetchHeader();
	let password = "<?php echo $_SESSION['password']?>";
</script>
</html>
<?php
}else{
echo "Login again!";
}
?>