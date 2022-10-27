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
	//RIGHT JOIN(Yəni özündən sonra və ya sağda yazılan tableni əsas götürən)
	$query = $db->query(
		"SELECT * FROM users 
		RIGHT JOIN info ON users.id = info.user_id
		RIGHT JOIN stats ON users.id = stats.user_id");

	echo $query->rowCount()."<br/>";
	
	foreach ($query as $value) {
		echo $value['name']." | ".$value['city']." | ".$value['posts']."<br/>";
	}
	?>
</body>
</html>