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

	$query = $db->query("SELECT * FROM users WHERE id IN(1,3,6,8)");

	foreach ($query as $value) {
		echo $value['id']." - ".$value['name']."<br/>";
	}
	
	?>
</body>
</html>