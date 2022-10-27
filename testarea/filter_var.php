<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: black ;color: white">
	<?php
	/*Filter_var dəyişgənin tərkibinin sadəcə tipini yox həmçinin onun nə olduğunu və tərkibdə bizə lazım olan elementlərin olub-olmadığınıda müəyyənləşdirir.*/
	$Var = "yes";
	$fv = filter_var($Var,FILTER_VALIDATE_BOOLEAN);

	if ($fv) {
		echo "YES";
	}
	else{
		echo "NO";
	}
	?>
</body>
</html>