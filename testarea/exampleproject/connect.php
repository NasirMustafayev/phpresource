<?php
error_reporting(0);
try{

	$db = new PDO("mysql:host=localhost;dbname=exampleproject;charset=UTF8","root","516458488");
}
catch(PDOException $error){
	echo "<h2>Database connection interrupted!</h2><br/>";
	echo $error->getMessage();}
?>