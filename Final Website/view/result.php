<?php
if(isset($_COOKIE['status'])){
include_once "../model/result-accessor.php";	
session_start();
resultAccessor();
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
<table class="form box">
	<tr>
		<th class="double-size" align="middle">Course Name</th>
		<th class="double-size" align="middle">Result</th>
	</tr>
	<tr>
		<td align="middle">Web Technology</td>
		<td align="middle"><a class="button" href="#"><?php echo $_SESSION['web-technology'];?></a></td>
	</tr>
	<tr>
		<td align="middle">Research Methodology</td>
		<td align="middle"><a class="button" href="#"><?php echo $_SESSION['research-methodology'];?></a></td>
	</tr>
	<tr>
		<td align="middle">Data Communication</td>
		<td align="middle"><a class="button" href="#"><?php echo $_SESSION['data-communication'];?></a></td>
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