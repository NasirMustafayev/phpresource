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

	$Value1 = current($Variable[2]);

	echo $Value1."<br/>------------<br/>";

	$Value2 = pos($Variable);

	echo $Value2;

	?>
</body>
</html>