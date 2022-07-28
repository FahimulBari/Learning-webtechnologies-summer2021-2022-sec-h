<?php
if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>User</title>
</head>
<body>
<h1>Welcome User</h1>
<a href="logout.php">Log Out</a>
</body>
</html>
<?php
}else{
	echo "Already Signed Out";
}
?>