<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: white ;color: black">
	<?php
	$_SESSION["User"] =  array('name' => 'Nasir', 'lastname' => 'Mousthafa', 'nick' => 'Madafakır'); 

	print_r($_SESSION);

	echo "<br/>".$_SESSION["User"]['name']." ".$_SESSION["User"]['lastname']." ".$_SESSION["User"]['nick']
	?>
</body>
</html>