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
//INNER JOIN, məlumatları yazılmış bütün tablelərə görə uyğunlaşdırır. Burada məlumatlar almaq üçün yazılan dəyər(id və s.) doğrultusunda o dəyərə uyğun sütünun varlığı əsasdır.Yəni dəyərlər bütün tablelarda kəsişməlidir.
	$query = $db->query(
		"SELECT * FROM users 
		INNER JOIN info ON users.id = info.user_id
		INNER JOIN stats ON users.id = stats.user_id");

	echo $query->rowCount()."<br/>";
	
	foreach ($query as $value) {
		echo $value['name']." | ".$value['city']." | ".$value['posts']."<br/>";
	}
	?>
</body>
</html>