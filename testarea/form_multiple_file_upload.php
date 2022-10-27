<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="files[]" multiple>
		<button type="submit" name="btn">Upload</button>
	</form>
	<?php
	$filedestination = "testuploadarea/";
	if (isset($_POST['btn'])) {
		foreach ($_FILES["files"]["tmp_name"] as $key => $value) {
			move_uploaded_file($_FILES["files"]["tmp_name"][$key], $filedestination.$_FILES["files"]["name"][$key]); ?>
			<img src="<?php echo  $filedestination.$_FILES["files"]["name"][$key]; ?>">
			<?php 	
		}
	}

	?>
</body>
</html>