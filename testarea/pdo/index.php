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

	$query = $db->query("SELECT * FROM users WHERE name='user1'");
	$fetch = $query->fetch(PDO::FETCH_ASSOC);
	echo $fetch['id'];

	
	?>
</body>
</html>