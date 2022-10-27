<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: white ;color: black">
	<?php

	class Class1{

		protected $Var1 = "Variable value 1";
		protected const VAR2 = "Variable value 2";

		public function Func1(){
			$Comb = "<i>Class1</i> ". $this->Var1." ".$this::VAR2."<br/>";

			return $Comb;
		}
	}

	class Class2 extends Class1{
		
		public function Func2(){
			$Comb = "<i>Class2</i> ". $this->Var1." ".$this::VAR2."<br/>";

			return $Comb;
		}

	}

	$Call2 = new Class2;

	echo $Call2->Func2();

	?>
</body>
</html>