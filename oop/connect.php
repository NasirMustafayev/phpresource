<?php
try {

	$db=new PDO("mysql:host=localhost;dbname=pdo;charset=utf8",'root','516458488');

	echo "";
}
catch(PDOException $err){
	?>
	<h3 style="color: red">
		<?php
		echo $err->getMessage();

	}
	?>
</h3>