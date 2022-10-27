<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php
	$BN = basename('testuploadarea/book.jpg');
	echo $BN.'<br/>';

	$DN = dirname('testuploadarea/book.jpg');
	echo $DN.'<br/>';

	$PI = pathinfo('testuploadarea/book.jpg');
	echo "<pre>";
	print_r($PI);
	echo "</pre><br/>";

	$RP = realpath('testuploadarea/book.jpg');
	echo $RP;
	?>
</body>
</html>