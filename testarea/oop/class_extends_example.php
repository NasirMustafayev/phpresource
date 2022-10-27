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
			$Comb = "<i>Class1</i> ". $this->Var1." / ".$this::VAR2."<br/>";

			return $Comb;
		}
	}

	class Class2 extends Class1{
		
		public function Func2(){
			$Comb = "<i>Class2</i> ". $this->Var1." / ".$this::VAR2."<br/>";

			return $Comb;
		}

	}


	class Classother extends Class3{

		private $Var_other = "Other variable value";

		public function Funcother(){

			$Comb = "<i>Classother</i> ".$this->Var_other." / ".$this::VAR3;

			return $Comb;
		}
	}

	class Class3 extends Class2{
		protected const VAR3 = "Variable value 3";

		public function Func3(){
			$Comb = "<i>Class3</i> ". $this->Var1." / ".$this::VAR2."<br/>";

			return $Comb;
		}
	}

	$Call1 = new Class1;
	$Call2 = new Class2;
	$Call3 = new Class3;
	$Call4 = new Classother;

	echo $Call1->Func1();
	echo $Call2->Func2();
	echo $Call3->Func3();
	echo $Call4->Funcother();
	?>
</body>
</html>