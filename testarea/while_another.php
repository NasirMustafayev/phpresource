<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: black ;color: white">
	<?php
	$Osturaq = 0;
	while ($Osturaq <= 100) {

		echo $Osturaq.'<br/>';

		if ($Osturaq>=10) {
			$Osturaq = $Osturaq + 5;

		}
		else{
			$Osturaq++;
		}

	}

	?>

</body>
</html>