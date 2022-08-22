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
	<title>Facilities</title>
</head>
<body>
<header id="header"></header>
<table class="box">
	<tr>
		<td align="middle">Gym Facility</td>
		<td align="middle"><button id="facility-gym" class="button" onclick="apply('facility-gym');">Apply</button></td>
	</tr>
	<tr>
		<td align="middle">Printing Facility</td>
		<td align="middle"><button id="facility-print" class="button" onclick="apply('facility-print');">Apply</button></td>
	</tr>
	<tr>
		<td align="middle">Labratory Facility</td>
		<td align="middle"><button id="facility-labratory" class="button" onclick="apply('facility-labratory');">Apply</button></td>
	</tr>
</table>	
<script>fetchHeader();</script>	
<script>
	function apply(facilityId) {
		let element = document.getElementById(facilityId);
		element.innerHTML = 'Applied';
		element.style.background = 'rgb(59 154 251)';

	}

</script>
</body>
</html>
<?php
}else{
echo "Login again!";
}
?>