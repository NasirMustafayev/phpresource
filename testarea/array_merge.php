<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA | ARRAYS</title>
</head>
<body style="background-color: black ;color: white">
	<?php

	$Variable = array("Zənci" , "Qarabala", array("Makar", "Kalaşnikov"), "30sant" , "Dombalmaq" , "Sıçmaq");

	$Variable1 = array("Gotabadi" , "Osturaq", "Kancuka" , array("Namciqa", "Tırıq"), "Ampir" , "Kamasutra");

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
	$Value = array_merge($Variable,$Variable1); ?>
	<pre>
		<?php
		print_r($Value);
		?> 
	</pre>
</body>
</html>