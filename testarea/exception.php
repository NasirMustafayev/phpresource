<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: black ;color: white">
	<?php

	/*
	Əsas məsələ nədir.
	Try ifadəsi daxilində, bizə lazım olan prosesi həyata keçiririk əgər hər hansı xəta və ya hər hansı istisna vəziyyət ortaya çıxarsa try dərhal bunu catch ifadəsinə ötürür və catch daxilində, try da yaranmış olan xəta vəya istisna vəziyyət üçün yazdığımız(throw) kodlar çalışır. Bu kodlar(catch daxilində yazılan) ekrana xəta baş verdiyi haqda mesaj vermək xarakterli də ola bilər.
	getMessage() catch daxilində qeyd olunmuş ifadənin xəta mesajlarını ekrana yazdırır.
	Finally isə yuxarıdakı proseslərdən təsirlənmir və try daxilində nə baş verdiyindən asılı olmayaraq, daxilindəki kodlar hər zaman çalışır.
	*/

	try {
		$Var ="Coni";

		if ($Var=="Coni") {
			echo "Hay Coni. Fuck you!";
		}
		else{

			throw new Exception("Zihtir Kopek!");
			
		}

	} catch (Exception $e) {

		echo $e->getMessage();
	}
	finally{

		echo "<br/>Finally Blyat";
	}

	?>

</body>
</html>