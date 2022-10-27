<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php
	$Funcs = array(
		function(){
			echo "CAAAAAAAAAAAAAAART";
		}, function(){
			echo "FAAAAAAAAAAAARRRRRRRRRRRRRT";
		}, function(){
			echo "DRRRRRRRRRRRRRRRRRRRRRRRIT";
		});

	foreach ($Funcs as $value) {
		$value();
		echo "<br>";
	}
	?>
</body>
</html>