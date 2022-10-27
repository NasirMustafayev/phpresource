<!DOCTYPE html>
<?php
require_once('connect.php');
?>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sərbəst iş Cədvəli v0.0.0.0.1</title>
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script src="countUp.js"></script>
</head>
<body>
	<?php
	//Students
	$studentquery=$db->prepare("SELECT * FROM students");
	$studentquery->execute();
	$showstudentcount=$studentquery->rowCount();
	//Movzular
	$movzuquery1=$db->prepare("SELECT * FROM movzular");
	$movzuquery1->execute();
	$showmovzucount=$movzuquery1->rowCount();
	//Fənnlər
	$fennquery1=$db->prepare("SELECT * FROM fennler");
	$fennquery1->execute();
	$showfenncount=$fennquery1->rowCount();
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-4" id="c1"></div>
			<div class="col-md-4 panel">
				<h2 class="lucida">Sərbəst iş cədvəli</h2>
				<select name="student_id" class="view">
					<option value="0">Tələbə</option>
					<?php
					while($showstudent=$studentquery->fetch(PDO:: FETCH_ASSOC)){
						?>
						<option value="<?php echo $showstudent['student_id'] ?>"><?php echo '#'.$showstudent['student_id'].' '.$showstudent['student_name']; ?></option>
					<?php } ?>
				</select>
				<br>
				<br>
				<div id="info">
					<h5 class="lucida">Mövzuların sayı:</h5><h1 id="movzucounter" class="lucida">0</h1>
					<h5 class="lucida">Tələbələrin sayı:</h5><h1 id="studentcounter" class="lucida">0</h1>
					<h5 class="lucida">Fənnlərin sayı:</h5><h1 id="fenncounter" class="lucida">0</h1>
				</div>
			</div>
			<div class="col-md-4" id="c2"></div>
			<div id="si-detail" class="col-md"></div>
		</div>
	</div>
</body>
<footer>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('.view').change(function(){

				var student_id = $(this).attr("id");

				$( '#si-detail' ).empty();

				$.ajax({
					url : "select.php",
					method: "post",
					data:  {student_id:$('.view option:selected').val()},
					success:function(data){
						$('#si-detail').append(data);

					}

				});
				$('#c1').hide();
				$('#c2').hide();
				$('.panel').toggleClass("animated slideInRight move");
			});
		});
	</script>
	<script type="text/javascript">
		var options = {
			  useEasing: true, 
			  useGrouping: true, 
			  separator: ',', 
			  decimal: '.', 
		};
		var demo1 = new CountUp('movzucounter', 0, <?php echo $showmovzucount; ?>, 0, 2.5, options);
		var demo2 = new CountUp('studentcounter', 0, <?php echo $showstudentcount; ?>, 0, 2.5, options);
		var demo3 = new CountUp('fenncounter', 0, <?php echo $showfenncount; ?>, 0, 2.5, options);
		if (!demo1.error) {
			  demo1.start();
			demo2.start();
			demo3.start();
		} else {
			  console.error(demo.error);
		}
	</script>
</footer>
</html>