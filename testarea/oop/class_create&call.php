<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: white ;color: black">
	<?php
	class Class1{

		public $name = "Gurbanbek";
		public $lastname = "Gothumbayev";

		public const NAME = "Gurbanbek";
		public const LASTNAME = "Gothumbayev";
	}

	$Call = new Class1;

	echo $Call-> name." ".$Call-> lastname ;
	echo "<br/>";

	/*For constant*/

	echo $Call:: NAME ." ". $Call:: LASTNAME ;
	?>
</body>
</html>