<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
</head>
<body style="background-color: black ;color: white">
	<?php
	$File = file_get_contents("test.json");

	//Burada true dedikdə json ilə gələn obyektlərin php də bir array kimi işlənməsi və göstərilməsinə şərait yaradır və proseslərin daha asan və rahat həyata keçrilməsini təmin etmiş olur.

	$Decode = json_decode($File,true);


	foreach ($Decode as $key => $value)
	{
		if (is_array($value)) {
			echo $key."<br/>";
			foreach ($value as $key => $value) {
				echo "> ".$key." ".$value."<br/>";
			}
		}
		else{
			echo $key." ".$value."<br/>";
		}
	}
	?>
</body>
</html>