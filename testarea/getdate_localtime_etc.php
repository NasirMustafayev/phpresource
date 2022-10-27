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
	$GT = getdate();

	echo "<pre>";
	print_r($GT);
	echo "</pre><hr>";

	$LT = localtime(1558193245,true);

	echo "<pre>";
	print_r($LT);
	echo "</pre><hr>";

	$Stamp = time();
	echo $Stamp.'<br>';

	$Stampdate = date('H:i:s', 1558193245);
	echo $Stampdate;
	?>
</body>
</html>