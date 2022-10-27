<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php
//Gettype
	$Var = 669.9;
	echo $Var."<br>";

	$Process = gettype($Var);

	echo $Process."<br>";

//Settype

	settype($Var, string);

	$ProcessSet = gettype($Var);
	echo "Set:".$ProcessSet."<br>";

//Setval
	echo intval($Var);
	?>
</body>
</html>