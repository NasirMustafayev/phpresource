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
	$query = $db->query("SELECT * FROM users");

	foreach ($query as $value) {
		echo $value['name']."<br/>";
	}
	?>
</body>
</html>