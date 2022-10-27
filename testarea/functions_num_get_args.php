<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php
	
	function Example($Ex1,$Ex2,$Ex3){
		$Num = func_num_args();
		echo $Num."<br/>";

		$Gets = func_get_args();
		print_r($Gets);
		echo "<br/>";

		$Get = func_get_arg(1);
		echo $Get;

		
	}
	Example("Ex1 Value","Ex2 Value","Ex3 Value");
	?>
</body>
</html>