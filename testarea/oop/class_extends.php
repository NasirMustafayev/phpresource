<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: white ;color: black">
	<?php

	class Class1{

		public $Var1 = "Variable value 1";
		public const VAR2 = "Variable value 2";

		public function Func1(){
			$Comb = "<i>Class1</i> ". $this->Var1." ". $this::VAR2."<br/>";

			return $Comb;
		}
	}

	class Class2 extends Class1{

		public function Func2(){
			$Comb = "<i>Class2</i> ". $this->Var1." ".$this::VAR2."<br/>";

			return $Comb;
		}

	}

	$Call1 = new Class1;
	$Call2 = new Class2;

	echo $Call1->Func1();
	echo $Call2->Func2();

	?>
</body>
</html>