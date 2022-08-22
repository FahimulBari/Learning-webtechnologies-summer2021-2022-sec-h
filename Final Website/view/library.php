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
<table class="box library">
	<tr>
		<th class="double-size">Books</th>
		<th class="double-size">Writter</th>
		<th class="double-size">Release</th>
		<th></th>
	</tr>
	<tr>
		<td align="middle">Clean Code</td>
		<td align="middle">Robert Cecil</td>
		<td align="middle">2008</td>
		<td align="middle"><a class="button" href="../assets/books/Clean Code.docx">Download</a></td>
	</tr>
	<tr>
		<td align="middle">Web Technologies</td>
		<td align="middle">Uttam K. Roy</td>
		<td align="middle">2010</td>
		<td align="middle"><a class="button" href="../assets/books/Web Technologies.docx">Download</a></td>
	</tr>
	<tr>
		<td align="middle">The Lean Startup</td>
		<td align="middle">Eric Ries</td>
		<td align="middle">2011</td>
		<td align="middle"><a class="button" href="../assets/books/The Lean Startup.docx">Download</a></td>
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