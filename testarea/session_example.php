<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: white ;color: black">
	<?php
	if (isset($_SESSION["User"])) {

		echo "Nətərsən ə!<br/>".$_SESSION["User"]["name"]." ".$_SESSION["User"]["lastname"];?>
		<br/><a href="?p=exit"><i>Exit</i></a>
	<?php }
	else{
		?>
		<form action="" method="post">
			<input type="text" name="name" placeholder="Name"><br/>
			<input type="text" name="lastname" placeholder="Lastname"><br/>
			<button type="submit" name="login">Login</button><br/>
		</form>
	<?php }
	if (isset($_POST["login"])) {
		$_SESSION["User"] = ["name" => $_POST["name"], "lastname" => $_POST["lastname"]];
	}
	if ($_GET["p"]=="exit") {
		session_destroy();
	}
	?>
</body>
</html>