<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php
	
	function Process($Currency,$Quantity){

		if ($Currency=="USD") {

			$Var = 1.7;
		}
		elseif($Currency=="EUR"){

			$Var = 2.0;
		}
		elseif($Currency=="GBP"){

			$Var = 2.20;

		}
		else{

			$Var = 0;
		}

		return Calculate($Currency,$Var,$Quantity);

	}

	function Calculate($CurrencyName,$SelectedCurrency,$EnteredQuantity){

		$CalculateProcessNotice = $SelectedCurrency*$EnteredQuantity;

		echo $EnteredQuantity." ".$CurrencyName."=".$CalculateProcessNotice." AZN";
	}

	Process("EUR", 69);

	?>
</body>
</html>