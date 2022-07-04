<html>
<head>
	<title>User Data</title>
</head>
<body>
<table border="1px">
	<tr>
		<th>Name</th>
		<th>ID</th>
	</tr>
	<?php
	  	$url = '../Data/users.txt';
     	$file = fopen($url, "r");
     	if($file){
     		while(($line = fgets($file))){
     			$array = explode("<.>", $line);
     			echo "<tr>";
     			echo "<td>".$array[0]."</td>";
     			echo "<td>".$array[1]."</td>";
     			echo "</tr>";
     		}

     		fclose($file);
     	}
	?>
</table><br><br>
<a href="../Registration-login/registration.html"></a>
</body>
</html>