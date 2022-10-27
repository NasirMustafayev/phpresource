<!DOCTYPE html>
<html>
<head>
	<?php
	require_once('connect.php');
	include'functions.php';
	session_start();
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Example Project User Login</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-4" id="c1"></div>
			<div class="col-md-4 panel">
				<?php
				if (isset($_SESSION['userid'])) {

					$userid=$_SESSION['userid'];
					$query=$db->query("SELECT * FROM users WHERE id='$userid'");
					$fetch=$query->fetch(PDO::FETCH_ASSOC);

				?>
				<img src="<?php echo $fetch['picture']; ?>" class="img-thumbnail">
				<h5>Name : <?php echo $fetch['name']; ?></h5>
				<h5>Email : <?php echo $fetch['email']; ?></h5>
				<h5>Password : <?php echo $fetch['password']; ?></h5>
				<a href="logout.php">Log out</a>
				<?php }
				else{
				?>
				<h2 class="lucida">Giriş</h2>
				<form action="signin.php" method="POST">
				<span>
					Username or email
				</span>
				<input type="text" name="login" class="form-control">
				<span>
					Password
				</span>
				<input type="Password" name="password" class="form-control">
				<br>
				<input type="submit" name="signin" value="Sign in" class="form-control">
				</form>
			<?php } ?>
			</div>
		</div>
	</div>
</body>
<footer>
<script src="bootstrap/bootstrap.min.js"></script>
</footer>
</html>
