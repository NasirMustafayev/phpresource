<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA | ARRAYS</title>
</head>
<body style="background-color: black ;color: white">
	<?php

	$Variable = array("Django","Osturabadi", array("Tiriqlama","Cirtlanmaq") ,"Namciqa");

	echo "<pre>";
	print_r($Variable);
	echo "</pre><hr>";

	array_shift($Variable);

	echo "<pre>";
	print_r($Variable);
	echo "</pre>";

	$Show = array_pop($Variable);

	echo "<pre>";
	print_r($Variable);
	echo "</pre><hr>";

	echo $Show;

	?>
</body>
</html>