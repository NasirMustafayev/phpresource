<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: black ;color: white">
	<?php

	function infinite_parameters() {
		foreach (func_get_args() as $param) {
			echo "$param" . PHP_EOL;
		}
	}
	infinite_parameters(Param1,Param2,Param3,Param4);

	?>
</body>
</html>