<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: white ;color: black">
	<?php
	class Class1
	{
		public function __construct($a,$b)
		{

			$Calculate = $a+$b;

			echo $Calculate;

		}
	}

	$Call = new Class1(5,15);

	?>
</body>
</html>