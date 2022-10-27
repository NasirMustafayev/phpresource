<!DOCTYPE html>
<?php
require_once('connect.php');

$WordQuery = $db->prepare("SELECT * FROM words order by word_id DESC");
$WordQuery->execute();
$Count = $WordQuery-> rowCount();
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Words</title>
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container">

		<div class="row">
			<form action="" method="post">
				<input type="text" name="word" id="word" placeholder="Enter word" required="">-<input type="text" name="word_t" placeholder="Enter translate" required="">:<button type="submit" name="save" style="width: 100px">Save</button>
			</form>
			<hr>
		</div>

		<div class="row">
			<div class="col-md-12" style="text-align: center;margin-top: 100px;margin-bottom: 100px">
				<?php
				$random = rand(1,$Count);
				$RandomQuery = $db->prepare("SELECT * FROM words where word_id=:random");
				$RandomQuery->execute(array("random"=>$random));
				$ShowRandomWord=$RandomQuery->fetch(PDO:: FETCH_ASSOC);

				$FindRandomWord = $db-> prepare("SELECT * FROM words where word_id=:random_id");
				$FindRandomWord->execute(array("random_id"=>$ShowRandomWord['word_id']));
				$ShowFindWord=$FindRandomWord->fetch(PDO::FETCH_ASSOC);

				$Countleght= strlen($ShowFindWord['word']);

				$Countleght = $Countleght + 12;

				echo "<h1 class='animated fadeIn'>".$ShowRandomWord['word']." - ".$ShowRandomWord['word_t']."</h1><br/>";
				?>
			</div>
		</div>
		<meta http-equiv="refresh" id="refresh" content="<?php echo $Countleght.".0"; ?>"/>
		<div class="row">
			<?php
			while($ShowWords = $WordQuery->fetch(PDO:: FETCH_ASSOC)){ ?>

				<div class="col-md-3" style="color:#A4A4A4">

					<?php 
					echo "<h5>".$ShowWords['word'] .' - '. $ShowWords['word_t']."</h5><br/>";?>
				</div>
			<?php }
			?>
		</div>

	</div>
</body>
<footer>
	<?php
	if(isset($_POST['save'])){
		$AddWord = $db->prepare("INSERT INTO words SET word=:word, word_t=:word_t");
		$AddWord->execute(array("word"=>$_POST['word'], "word_t"=>$_POST['word_t']));
		if (!$AddWord) {
			echo "ERROR";
		}
		else{ ?>
			<meta http-equiv="refresh" content="0.5"/>
		<? }
	}
	?>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script type="text/javascript">
		 //setTimeout('document.getElementById("mySpan").innerHTML += "How ";', 3000);
	</script>
</footer>
</html>