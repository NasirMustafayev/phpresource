<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA | ARRAYS</title>
</head>
<body style="background-color: black ;color: white">
	<?php

	const Sabit = array("Drug", array("Haftafa","Unitaz") ,"Druga","Gopnik");
	?>
	<pre>
		<?php
		echo "<br/>".Sabit[0]."<br/>";
		echo "-|".Sabit[1][0]."<br/>";
		echo "-|".Sabit[1][1]."<br/>";
		echo Sabit[2]."<br/>";
		echo Sabit[3]."<hr>";
		$say = count(Sabit[1], COUNT_RECURSIVE);
		echo $say;
		?>
	</pre>
</body>
</html>