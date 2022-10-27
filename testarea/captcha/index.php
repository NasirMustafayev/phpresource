<!DOCTYPE html>
<?php
include'captcha.php';
?>
<html>
<head>
	<title>Captcha</title>
</head>
<body>
	<form action="captcha.php" method="post">
		<img src="<?php echo $captcha; ?>"><br/>
		<input type="text" name="captcha" autocomplete="off">:<input type="submit" name="button" value="Test">
	</form>
</body>
</html>