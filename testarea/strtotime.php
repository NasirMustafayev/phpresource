<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php
	$Date = date("Y-m-d");
	echo strtotime($Date)."-";
	$Process = strtotime("2 day", strtotime($Date));
	echo $Process;
	?>
</body>
</html>