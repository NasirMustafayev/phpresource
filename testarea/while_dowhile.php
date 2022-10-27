<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: black ;color: white">
	<?php
	$Var = 999;
	do{
		echo $Var.'<br/>';
		$Var = $Var-10;
	}
	while ($Var >= 0);
	
	echo "<hr>";

	$Var1=0;
	while ($Var1 <= 100) {
		echo $Var1.'<br/>';
		$Var1++;
	}
	?>

</body>
</html>