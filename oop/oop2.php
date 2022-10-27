<!DOCTYPE html>
<html>
<head>
	<title>OOP2</title>
</head>
<body>
	<form action="" method="post">
		<input type="number" name="topnum1" style="width: 50px;height: 30px" value="<?php echo $_POST['topnum1'] ?>">
		<select name="proses"  style="width: 80px;height: 30px">
			<option value="1" <?php if($_POST['proses']==1){?> selected="" <?php } ?>>Toplama</option>
			<option value="2" <?php if($_POST['proses']==2){?> selected="" <?php } ?>>Çıxma</option>
			<option value="3" <?php if($_POST['proses']==3){?> selected="" <?php } ?>>Vurma</option>
			<option value="4" <?php if($_POST['proses']==4){?> selected="" <?php } ?>>Bölmə</option>
		</select>
		<input type="number" name="topnum2" style="width: 50px;height: 30px"  value="<?php echo $_POST['topnum2'] ?>">
		<br><br>
		<button type="submit" style="width: 200px;height: 30px">Okey</button>
	</form>
</body>
</html>

<?php
include'functions.php';

$new= new Hesabla;

$new->data1=$_POST['topnum1'];
$new->data2=$_POST['topnum2'];
echo "<h3>";
$new->hesablama();
?>