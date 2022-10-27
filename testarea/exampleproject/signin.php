<?php
require_once('connect.php');
include'functions.php';
session_start();

if (empty($_POST['login'])) {?>
	<script type="text/javascript">
		window.location.href = "index.php";
	</script>
	<?php 
	exit;
}

$login = clear($_POST['login']);
$password = md5(clear($_POST['password']));

$query = $db->query("SELECT * FROM users WHERE email='$login' OR name='$login' AND password='$password'");
$control = $query->rowCount();
$fetch = $query->fetch(PDO::FETCH_ASSOC);
$userid = $fetch['id'];

if ($control==1){
		$_SESSION["userid"] = $userid;
	?>
	<script type="text/javascript">
		window.location.href = "index.php";
	</script>
<?php }
else{ ?>
	<br/><span class="info">-Username or password is wrong</span>
<?php }
?>