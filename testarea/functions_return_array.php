<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php
	function Afrika(){

		$Heyvan1 = "Vaşaq";
		$Heyvan2 = "Alligator";
		$Heyvan3 = "Mış";

		return array($Heyvan1,$Heyvan2,$Heyvan3);
	}
	foreach (Afrika() as $value) {
		echo $value."<br>";
	}
	?>
</body>
</html>