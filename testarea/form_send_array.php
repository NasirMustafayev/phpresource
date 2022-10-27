<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<form action="" method="post">
		<input type="checkbox" name="CB[]" value="Sıçmaq">
		<input type="checkbox" name="CB[]" value="Osturmaq">
		<input type="checkbox" name="CB[]" value="İşəmək">
		<input type="checkbox" name="CB[]" value="Sikişmək"><br/>
		<button type="submit" name="btn">Send</button>
	</form>
	<?php
	$Var = $_POST['CB'];
	if (isset($_POST['btn'])) {

		foreach ($Var as $value) {
			echo $value."<br/>";
		}
	}
	?>

</body>
</html>