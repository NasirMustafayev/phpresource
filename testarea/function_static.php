<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php

	function Process(){

		static $Number = 100;
		$Number = $Number + 1;

		echo $Number.'<br>';
	}
	Process();
	Process();
	Process();
	Process();
	?>
</body>
</html>