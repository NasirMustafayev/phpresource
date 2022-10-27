<?php
require_once('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: black ;color: white">
	<?php

	$queryinfo = $db->query("SELECT * FROM stats WHERE comments>40");

	foreach ($queryinfo as $value) {
		$userid = $value['user_id'];
		$queryusers = $db->query("SELECT * FROM users WHERE id='$userid'");

		foreach ($queryusers as $value1) {
			echo $value1['name']."-".$value['comments']."<br/>";
		}
	}
	
	?>
</body>
</html>