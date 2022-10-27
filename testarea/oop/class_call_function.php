<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: black ;color: white">
	<?php
	class Class1{

		public function Func1(){

			$Show = "Hay qayz!";

			return $Show;
		}

	}

	$Call = new Class1;

	echo $Call->Func1();
	
	?>
</body>
</html>