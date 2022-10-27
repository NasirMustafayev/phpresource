<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<form action="" method="post">
		<input type="text" name="value">
		<button type="submit">Ok</button>
	</form>
	<hr>
	<?php
	$Variables = array("Djohn","Conatan","Kamazuki","Hantari","Minoko");
	if (empty($_POST['value'])) {

	}else{

		foreach ($Variables as $value) {
			if ($value == $_POST['value']) { ?>
				<h5 class="animated fadeIn">
					<?php echo $value; ?>
				</h5>
				<?php 
				break;
			}
			else{ ?>
				<h5 class="animated fadeIn">
					<?php echo $value."<br/>"; ?>
				</h5>
				<?php	
			}
		}
	}
	?>
</body>
</html>