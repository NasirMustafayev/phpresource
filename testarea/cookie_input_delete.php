<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: white ;color: black">
	<?php
	if(isset($_COOKIE["User"])){

		?>
		<form action="" method="post">
			<button type="submit" name="exit">Exit</button>
		</form>
		<?php
	}
	else{
		?>
		<form action="" method="post">
			Name<br/>
			<input type="text" name="name"><br/>
			Lastname<br/>
			<input type="text" name="lastname"><br/>
			Nick<br/>
			<input type="text" name="nick"><br/><br/>
			<button type="submit" name="information" style="width: 173px">Send</button>
		</form>
	<?php } ?>
	<?php
	if(isset($_POST['information'])){
		$cookieend = time() + (60*60);
		setcookie("User[Name]",$_POST['name'],$cookieend);
		setcookie("User[Lastname]",$_POST['lastname'],$cookieend);
		setcookie("User[Nick]",$_POST['nick'],$cookieend);
	}

	echo  $_COOKIE["User"]["Name"]." ". $_COOKIE["User"]["Lastname"]." ".$_COOKIE["User"]["Nick"]."<br/>";

	if (isset($_POST['exit'])) {
		setcookie("User[Name]",$_POST['name'],0);
		setcookie("User[Lastname]",$_POST['lastname'],0);
		setcookie("User[Nick]",$_POST['nick'],0);
	}
	?>
</body>
</html>