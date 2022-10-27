<?php
try{
	$Connect = new PDO("mysql:host=localhost;dbname=testarea;charset=utf8",'root','516458488');
	echo "";
}
catch(PDOException $Error){
	echo $Error->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TESTAREA</title>
	<!-- DELETE  -->
	<link rel="stylesheet" type="text/css" href="bootstrap/animate.css">
</head>
<body style="background-color: black ;color: white">
	<form action="" method="post" name="addword">
		<input type="text" name="word">
		<select name="group">
			<option value="greet">Salamlamaq</option>
			<option value="meet">Tanış olmaq</option>
			<option value="mood">Əhval</option>
		</select>
		<br>
		<button type="submit" style="width: 250px" name="addwordbutton">Add</button>
	</form>
	<hr>
	<form action="" method="post" name="chatform">
		<input type="text" name="chat">
		<button type="submit" name="sendbutton">Send</button>
	</form>
	<br/>

	<?php
	if(isset($_POST['addwordbutton'])){

		$addword = $Connect->prepare("INSERT INTO {$_POST['group']} SET word=:word");
		$addword->execute(array("word" =>$_POST['word']));

		echo ($addword) ? "OK" : "Error";
	}
	if (isset($_POST['sendbutton'])) {
		$answerquery = $Connect->prepare("SELECT * FROM {$_POST['chat']}");
		$answerquery->execute();
		$count =$answerquery ->rowCount();
		$Random = rand(1, $count);

		$answerqueryrand = $Connect->prepare("SELECT * FROM {$_POST['chat']} where word_id=:id");
		$answerqueryrand->execute(array('id' => $Random));
		while($showanswer= $answerqueryrand->fetch(PDO::FETCH_ASSOC)){
			echo $showanswer['word'].'<br/>';
		}

		$Words= array('greet','meet','mood');
		if (!in_array($_POST['chat'], $Words)) {

			echo "FUCK YOUR MOUTH!";
		}
	}

	?>
</body>
</html>