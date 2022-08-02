<?php
if(isset($_COOKIE['status'])){
session_start();
?>
<html>
<head>
	<title>Home</title>
</head>
<body>
<h1>Welcome Home, <?php echo $_SESSION['username']; ?></h1>

<h3>Major: 
<?php 
if(empty($_SESSION['major'])){ echo "Not Declared"; }
else{ echo $_SESSION['major']; }
?>
</h3>

<a href="../Home/not_available.php">Users</a><br>
<a href="../Home/not_available.php">Change Password</a><br>
<a href="../Home/not_available.php">Course Content</a><br>
<a href="../Home/not_available.php">Result</a><br>
<a href="../Home/not_available.php">Major Declaration</a><br>
<a href="../Home/not_available.php">Facilities</a><br>
<a href="../Home/not_available.php">Form</a><br>
<a href="../Home/not_available.php">Library</a><br>
<a href="../Home/not_available.php">Logout</a>
</body>
</html>
<?php
}else{
echo "Login again!";
}
?>
