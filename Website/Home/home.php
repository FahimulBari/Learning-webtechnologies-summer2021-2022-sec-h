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

<a href="users.php">Users</a><br>
<a href="change-password.html">Change Password</a><br>
<a href="../Course/courses.html">Course Content</a><br>
<a href="../Course/result.php">Result</a><br>
<a href="../Major/major-declare-form.php">Major Declaration</a><br>
<a href="../Facilities/facilities.html">Facilities</a><br>
<a href="../Form/form.html">Form</a><br>
<a href="../Library/library.html">Library</a><br>
<a href="../Registration-login/logout.php">Logout</a>
</body>
</html>
<?php
}else{
echo "Login again!";
}
?>
