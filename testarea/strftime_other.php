<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php
	date_default_timezone_set('Asia/Baku');
	$Date = iconv("", "UTF-8", strftime("%B %A - %Z"));
	echo $Date.'<br/>';
	?>
</body>
</html>