<?php 
require_once'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style type="text/css">
	.titlestyle{
		background: grey;
		border-radius: 5px;
		color: white;
		width: 100%
	}
	.data{
		background: #f0f0f0;
		border-radius: 10px;
		width: 500px;
		margin: 2px
	}
	.show{
		height: 50px;
		width: 250px;
		border-radius: 5px;
	}

</style>
<title>Ajax experiment</title>
<script type="text/javascript" src="../jquery-3.1.1.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="titlestyle col-md-4"><h1>Information</h1></div>
			<div class="data col-md">
				<?php
				$query=$db->prepare("SELECT * FROM users");
				$query->execute();

				while($show=$query->fetch(PDO:: FETCH_ASSOC)){

					?> <a href="javascript:;" class="show" id="<?php echo $show['user_id']; ?>"><?php echo $show['user_name']." ".$show['user_lastname'];?></a><br><?php 
				}?>
			</div>
			<div id="info"></div>
		</div>
	</div>
</body>
<footer>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.show').click(function(){
				var id= $(this).attr("id");
				$.ajax({
					method:"post",
					url:"process.php",
					data:{id,id},
					success:function(result){

						$("#info").html(result);
					}

				});
			});
		});
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</footer>
</html>