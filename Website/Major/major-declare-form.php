<?php
session_start();

if(empty($_SESSION['major'])){
?>	

<html>
<head>
	<title>Major Declare</title>
</head>
<body>
<h1>Major Declare</h1>
<form action="major-check.php" method="post">
	<input type="radio" name="major" value="Software Engineering"> Software Engineering <br>
	<input type="radio" name="major" value="Computational Theory"> Computational Theory <br>
	<input type="radio" name="major" value="Computer Engineering"> Computer Engineering <br>
	<input type="radio" name="major" value="Information Systems"> Information Systems <br><br>
	<button type="submit">Confirm</button>
</form>
</body>
</html>

<?php
}
else{
	echo "<h1>You have already declared major</h1>"; 
    echo "<h3>Major: ".$_SESSION['major']."</h3>"; 
}
?>