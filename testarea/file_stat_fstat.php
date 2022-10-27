<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php
	$file = "testuploadarea/book.jpg";
	$openfile = fopen($file, 'r');

	$Stat = stat($file);
	echo "<pre>";
	print_r($Stat);
	echo "</pre>";

	$Fstat = fstat($openfile);
	echo "<pre>";
	print_r($Fstat);
	echo "</pre>";

	clearstatcache();
	?>

</body>
</html>