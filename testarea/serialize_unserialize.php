<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php
	$Var = array('Value1', 'Value2', 'Value3', 69);

	$SerializeVar =	serialize($Var);
	echo $SerializeVar.'<br>';

	$UnserializeVar = unserialize($SerializeVar);

	print_r($UnserializeVar);

	?>
	
</body>
</html>