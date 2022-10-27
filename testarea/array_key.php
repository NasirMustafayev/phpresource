<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA | ARRAYS</title>
</head>
<body style="background-color: black ;color: white">
	<?php

	$Variable = array("Key0" => "Django","Osturabadi", array("Murtuz" => "Tiriqlama","Cirtlanmaq") ,"Namciqa");

	echo "<pre>";
	print_r($Variable);
	echo "</pre><hr>";

	$Value = key($Variable[1]);

	echo $Value;

	?>
</body>
</html>