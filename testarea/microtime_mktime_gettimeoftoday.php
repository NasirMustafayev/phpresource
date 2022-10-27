<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php
	$MC =  microtime();
	echo $MC.'<br>';

	$MK = mktime();
	echo $MK.'<br>';

	$GT = gettimeofday();
	echo "<pre>";
	print_r($GT);
	echo "</pre>";
	?>
</body>
</html>