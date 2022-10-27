<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA | OOP</title>
</head>
<body style="background-color: white ;color: black">
	<?php

	class Class1{

		protected $Var = "Class1 Variable";

		public function Func1(){
			$Show = $this->Var;
			return $Show;
		}

	}

	class Class2 extends Class1{

		public function Func2(){
			$Show = "Class2 Variable ". $this->Func1();
			return $Show;
		}
	}


	$Call2 = new Class2;

	echo $Call2->Func2();
	?>
</body>
</html>