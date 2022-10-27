<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA | ARRAYS</title>
</head>
<body style="background-color: black ;color: white">
	<?php

	$Variable = array("Birinci", "Ikinci", "Ucuncu", "Dorduncu", "Besinci", "Altinci");

	$Value = array_slice($Variable, -3);
	?>
	<pre>
		<?php
		print_r($Variable); 
		?>
	</pre><hr>
	<pre>
		<?php
		print_r($Value);
		?> 
	</pre><br>
	<?php
	$Value = array_slice($Variable, 2, 3, true);
	?>
	<pre>
		<?php
		print_r($Value);
		?> 
	</pre><br>
</body>
</html>