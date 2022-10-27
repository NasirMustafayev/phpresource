<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: white ;color: black">
	<?php
	class Class1{

		public $Var1 = "Johnny";
		public const VAR2 = "Bravo";

		public function Func1()
		{
			$Comb = $this->Var1." ".self::VAR2;

			return $Comb;
		}
	}
	$Call = new Class1;

	echo $Call->Func1();
	?>
</body>
</html>