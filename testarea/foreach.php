<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: black ;color: white">
	<?php
	$variable = array("Coni","Kamasutra",array("Kantrabas", "Namcıka"),"Aftafa","Gottler","Peyman");

	//Foreach ilə array içindəki bütün verilənləri açar dəyərinə uyğun($key) avtomatik alaraq, hər birini ləqəblər vasitəsilə oxuya bilirik.
	//Əgər gələn verilən də bir arraydırsa o zaman onun array olduğunu yoxlayıb(is_array) ona uyğun əməliyyatlarımızı həyata keçiririk.
	
	foreach ($variable as $key => $value) {

		if (is_array($value)) {
			
			foreach ($value as $key => $value) {

				echo "--".$key."=>".$value."<br/>";
			}
		}
		else{
			echo $key."=>".$value."<br/>";
		}
	}

	?>

</body>
</html>