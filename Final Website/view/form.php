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
	<title>Library</title>
</head>
<body>
<header id="header"></header>
<table class="box form">
	<tr >
		<th class="double-size">Forms</th>
		<th></th>
	</tr>
	<tr>
		<td align="middle">Assignment Cover Page</td>
		<td align="middle"><a class="button" href="../assets/form/Assignment Cover Page.docx">Download</a></td>
	</tr>
	<tr>
		<td align="middle">Drop Application</td>
		<td align="middle"><a class="button" href="../assets/form/Drop Application.docx">Download</a></td>
	</tr>
	<tr>
		<td align="middle">Parking Application</td>
		<td align="middle"><a class="button" href="../assets/form/Parking Application.docx">Download</a></td>
	</tr>
	<tr>
		<td align="middle">Payment slip</td>
		<td align="middle"><a class="button" href="../assets/form/Payment Slip.docx">Download</a></td>
	</tr>
</table>
<script>fetchHeader();</script>	
</body>
</html>
<?php
}else{
echo "Login again!";
}
?>