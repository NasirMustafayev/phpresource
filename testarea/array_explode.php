<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA | ARRAYS</title>
</head>
<body style="background-color: black ;color: white">
	<?php

	$Variable = "Zənci,Qarabala,30sant,Dombalmaq,Sıçmaq";

	echo $Variable."<hr>";

	$Value = explode(",", $Variable, 3); 

	echo "<pre>";
	print_r($Value);
	echo "</pre><hr>";

	$Value = explode(",", $Variable, -2); 

	echo "<pre>";
	print_r($Value);
	echo "</pre>";

	?>
</body>
</html>