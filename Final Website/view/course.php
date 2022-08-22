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
	<title>Content</title>
</head>
<body>
<header id="header"></header>
<table class="box">
	<tr>
		<th>Course Name</th>
		<th>Content</th>
	</tr>
	<tr>
		<td align="middle">Web Technology</td>
		<td align="middle"><a class="button" href="content.php?url=../assets/content/Web Technology/">Content</a></td>
	</tr>
	<tr>
		<td align="middle">Data Communication</td>
		<td align="middle"><a class="button" href="content.php?url=../assets/content/Data Communication/">Content</a></td>
	</tr>
	<tr>
		<td align="middle">Research Methodology</td>
		<td align="middle"><a class="button" href="content.php?url=../assets/content/Research Methodology/">Content</a></td>
	</tr>
</table>
</body>
<script>fetchHeader();</script>	
</html>
<?php
}else{
echo "Login again!";
}
?>