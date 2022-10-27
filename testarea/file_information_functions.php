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

	$FT = filetype("testuploadarea/book.jpg");
	echo $FT."<br/>";

	$FS = filesize("testuploadarea/book.jpg");
	echo $FS."<br/>";

	$FCT = filectime("testuploadarea/book.jpg");
	echo $FCT."<br/>";

	$FMT = filemtime("testuploadarea/book.jpg");
	echo $FMT."<br/>";

	$FAT = fileatime("testuploadarea/book.jpg");
	echo $FAT."<br/>";

	$Date = date("d.m.Y H:i:s", $FCT);
	echo $Date;
	?>
</body>
</html>