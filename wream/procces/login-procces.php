<?php
include'../config/connect.php';
ob_start();
session_start();

if(isset($_POST['login'])) {

	if ($_POST['login']=='') {
		header('location:../login.php');
	}
	else{
		$username=trim($_POST['username']);
		$username=strip_tags($_POST['username']);
		$username=htmlspecialchars($_POST['username']);

		$password=trim(md5($_POST["password"]));
		$password=strip_tags(md5($_POST["password"]));
		$password=htmlspecialchars(md5($_POST["password"]));

		if ($username && $password) {

			$mysql_sorgu=@mysql_query("select user_id,usermail,userimg,userbg from users where username='$username' and password='$password'");
			$info=@mysql_fetch_assoc($mysql_sorgu);
			$verilensorgu=@mysql_num_rows($mysql_sorgu);

			if ($verilensorgu>0) {

				$_SESSION['user_id']=$info['user_id'];
				$_SESSION['usermail']=$info['usermail'];
				$_SESSION['userimg']=$info['userimg'];
				$_SESSION['userbg']=$info['userbg'];
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;

				header('location:../index.php');
			}
			else{
				header('location:../login.php?login=no');
			}
		}
	}
}
else{
	header('location:../login.php');
}
?>