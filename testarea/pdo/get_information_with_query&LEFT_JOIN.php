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
	//LEFT JOIN(Yəni özündən soldakı tableni əsas götürən), məlumatları ilk yazılan tableyə görə uyğunlaşdırır. Digər tablelardakı sütun sayından asılı olamayaraq yazılan dəyər(id və s.) doğrultusunda ilk tabledakı məlumatların hamısı alınır.
	$query = $db->query(
		"SELECT * FROM users 
		LEFT JOIN info ON users.id = info.user_id
		LEFT JOIN stats ON users.id = stats.user_id");

	echo $query->rowCount()."<br/>";
	
	foreach ($query as $value) {
		echo $value['name']." | ".$value['city']." | ".$value['posts']."<br/>";
	}
	?>
</body>
</html>