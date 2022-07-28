<?php
if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<h1>Hello Admin</h1>
<a href="logout.php">Log Out</a>
</body>
</html>
<?php
}else{
	echo "Already Signed Out";
}
?>