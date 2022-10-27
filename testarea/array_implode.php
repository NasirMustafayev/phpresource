<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA | ARRAYS</title>
</head>
<body style="background-color: black ;color: white">
	<?php

	$Variable = array("Zənci" , "Qarabala" , "30sant" , "Dombalmaq" , "Sıçmaq");

	?>
	<pre>
		<?php
		print_r($Variable); 
		?>
	</pre>

	<?php 
	$Value = implode(" / ", $Variable);

	?>
	<hr>
	<?php
	echo $Value; 
	?>
</body>
</html>