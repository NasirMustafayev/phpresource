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

	array_unshift($Variable[2], "Gotabad");

	echo "<pre>";
	print_r($Variable);
	echo "</pre>";

	$Say = array_push($Variable, "Zihtir");

	echo "<pre>";
	print_r($Variable);
	echo "</pre><br/>";

	echo $Say;


	?>
</body>
</html>