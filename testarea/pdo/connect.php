<?php
try{

	$db = new PDO("mysql:host=localhost;dbname=osturmaq;charset=UTF8", "root","516458488");
}
catch(PDOException $error){

	echo "Database connection error:<br/>";
	echo $error->getMessage();
	die();
}

?>