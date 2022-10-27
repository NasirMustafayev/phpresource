<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: white ;color: black">
	<?php

	class Class1{

		protected $Var = "Class1 Variable";

		public function Func(){
			$Show = $this->Var;
			return $Show;
		}

	}

	class Class2 extends Class1{

		public function Func(){
			$Show = "Class2 Variable ". parent::Func();
			return $Show;
		}
	}


	$Call1 = new Class1;
	$Call2 = new Class2;

	echo $Call2->Func();
	?>
</body>
</html>