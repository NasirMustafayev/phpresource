<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<?php
	/*Create file*/
	touch('testuploadarea/test/Created.txt');

	/*Rename current file*/
	rename('testuploadarea/test/Created.txt','testuploadarea/test/Updated.txt');
	
	/*Copy file content in new file*/
	copy('testuploadarea/test/test.txt', 'testuploadarea/test/test1.txt');
	
	/*Delete current file*/
	//unlink('testuploadarea/test/Updated.txt')
	?>

</body>
</html>