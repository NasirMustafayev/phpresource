<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php
	$cookieend = time() + (60*60*24*7);
	setcookie("Sikiminbasi", "Gotumbayev", $cookieend);

	echo $_COOKIE['Sikiminbasi'];

	?>

</body>
</html>