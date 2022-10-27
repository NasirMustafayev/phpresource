<!DOCTYPE html>
<?php
require_once('connect.php');
include'weekselect.php';
$hitquery = $db-> prepare("SELECT * FROM hit");
$hitquery -> execute();
$showhit = $hitquery->fetch(PDO::FETCH_ASSOC);

$hit = $showhit['hit']+1;

$updatehit =$db-> prepare("UPDATE hit SET hit=:hit");
$updatehit -> execute(array('hit' => $hit));
?>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dərs cədvəli | Mühasibat uçotu və audit 3B</title>
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="shortcut icon" type="image/png" href="logo.png"/>
	<script src="countUp.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4" id="c1"></div>
			<div class="col-md-4 panel">
				<strong><i style="float: right;"><?php echo $Getday." ".$Month; ?></i></strong>
				<h4><a style="float: left;" href="index.php">&#10094;</a></h4>
				<hr>
				<h2 class="lucida">Dərs cədvəli</h2>
				<select name="ders_gun" class="view">
					<option>Seç</option>
					<option value="0">Bütün günlər</option>
					<option value="1">1.Bazar ertəsi</option>
					<option value="2">2.Çərşəmbə axşamı</option>
					<option value="3">3.Çərşəmbə</option>
					<option value="4">4.Cümə axşamı</option>
					<option value="5">5.Cümə</option>
				</select>
			</div>
			<div class="col-md-4" id="c2"></div>
			<div id="cedvel" class="col-md"></div>
		</div>
		<form action="redirect.php" method="get" target="_blank">
			<div class="row" id="mat">
				<div class="col-md-4" id="c1"></div>
				<div class="col-md-4 panel">
					<h2 class="lucida">Dərs materialı</h2>
					<select name="material" class="view1">
						<option value="sec">Seç</option>
						<option value="vergi">Vergi və vergitutma</a></option>
						<option value="valyuta">Beynəlxalq valyuta və kredit münasibətləri</option>
						<option value="marketinq">Marketinq</option>
						<option value="qiymet">Qiymət və qiymətləndirmə</option>
						<option value="idareetme">İdarəetmə təhlili</option>
						<option value="budce">Büdcə sistemi</option>
					</select>
					<button type="submit" class="downloadbutton">Endir</button>
				</div>
				<div class="col-md-4" id="c2"></div>
				<div id="cedvel" class="col-md"></div>
			</div>
		</form>
		<div class="row" id="info">
			<div class="col-md-4" id="c1"></div>
			<div class="col-md-4 info">
				<h7><font color="red">[!]</font><i> Dərs cədvəli daha yaxşı istifadəçi təcrübəsi üçün hər həftənin axırı(cümə günü) avtomatik olaraq bir sonrakı həftənin(alt, üst) cədvəlini göstərir.</i></h7><br>
				<div style="float: right;font-size: 13px">&#9786;<?php echo $hit; ?></div>
				<div class="logo"><img src="logo.png" width="40px"></div><h5 class="logotext lucida">MA Portal</h5>
			</div>
		</div>
	</div>
</body>
<footer>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.view').change(function(){

				var ders_gun = $(this).attr("id");

				$( '#cedvel' ).empty();

				$.ajax({
					url : "select.php",
					method: "post",
					data:  {ders_gun:$('.view option:selected').val()},
					success:function(data){
						$('#cedvel').append(data);

					}

				});
				$('#c1').hide();
				$('#c2').hide();
				$('#mat').hide();
				$('#info').hide();
				$('.panel').toggleClass("animated slideInRight move");
			});
		});
	</script>
</footer>
</html>