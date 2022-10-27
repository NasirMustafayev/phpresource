<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA | ARRAYS</title>
</head>
<body style="background-color: black ;color: white">
	<?php

	$Variable = array("Zənci" , "Qarabala", array("Makar", "Kalaşnikov"), "30sant" , "Dombalmaq" , "Sıçmaq");

	?>
	<pre>
		<?php
		print_r($Variable); 
		?>
	</pre><hr>
	<?php 
	list($Value, $Value1, list($Value2_1, $Value2_2), $Value3, $Value4, $Value5) = $Variable;

	echo $Value."</br>";
	echo $Value1."</br>";
	echo $Value2_1."</br>";
	echo $Value2_2."</br>";
	echo $Value3."</br>";
	echo $Value4."</br>";
	echo $Value5."<hr>";

	list($Value6, , , $Value7) = $Variable;

	echo $Value6."</br>";
	echo $Value7;
	?> 
</body>
</html>