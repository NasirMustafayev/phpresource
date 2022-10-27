<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: white ;color: black">
	<?php
	class Class1
	{
		
		public function Func1(){

			$Show = "Elementary Function <b>top</b><br/>";

			return $Show;
		}

		//Construct funksiyası sinif çağırılığı anda avtomatik və ilk çalışan funksiyadır.
		function __construct()
		{
			echo "Construct Function<br/>";
		}

		//Destruct funksiyası sinif çağrıldığı anda avtomatik və ən sonda(bütün kodlardan sonra sıra fərqi olmadan) çalışan funkisyadır.
		function __destruct(){
			echo "<b>De</b>struct Function";
		}

		public function Func2(){

			$Show = "Elementary Function <b>bottom</b><br/>";

			return $Show;
		}
	}

	$Call = new Class1;

	echo $Call->Func1();
	echo $Call->Func2();
	?>
</body>
</html>