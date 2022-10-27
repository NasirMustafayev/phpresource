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

	$Value1 = next($Variable);
	$Value1 = next($Variable);
	
	echo $Value1 ."<hr>";

	$Value2 = prev($Variable);

	echo $Value2 ."<hr>";

	$Value3 = reset($Variable);

	echo $Value3; 
	?>
</body>
</html>