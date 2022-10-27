<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="picture">
		<button type="submit" name="btn">Upload</button>
	</form>
	<?php
	
		$destinationfolder = "testuploadarea/";
		move_uploaded_file($_FILES["picture"]["tmp_name"], $destinationfolder.$_FILES["picture"]["name"]);
	?>
	<img src="<?php echo $destinationfolder.$_FILES["picture"]["name"]; ?>">
</body>
</html>