<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA | ARRAYS</title>
</head>
<body style="background-color: black ;color: white">
	<?php

	$Variable = array("Birinci", "Ikinci", "Ucuncu", "Dorduncu", "Besinci", "Altinci");

	$Variable1 = array("Gotabadi", "Osturaq", array("Kancuka"), "Ampir", "Kamasutra", "Namciqa");

	$Value = array_combine($Variable, $Variable1);
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

	<pre>
		<?php
		print_r($Value);
		?> 
	</pre>
</body>
</html>