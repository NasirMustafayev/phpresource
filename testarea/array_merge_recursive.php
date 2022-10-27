<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA | ARRAYS</title>
</head>
<body style="background-color: black ;color: white">
	<?php

	$Variable = array("Value1" => "Zənci" , "Qarabala", array("Makar", "Kalaşnikov"), "Value2" => "30sant" , "Dombalmaq" , "Sıçmaq");

	$Variable1 = array("Gotabadi" , "Osturaq", "Value2" => "Kancuka" , array("Namciqa", "Tırıq"), "Value1" => "Ampir" , "Kamasutra");

	?>
	<pre>
		<?php
		print_r($Variable); 
		?>
	</pre><br>
	<pre>
		<?php
		print_r($Variable1); 
		?>
	</pre><hr>
	<?php
	$Value = array_merge_recursive($Variable, $Variable1); ?>
	<pre>
		<?php
		print_r($Value);
		?> 
	</pre>
</body>
</html>