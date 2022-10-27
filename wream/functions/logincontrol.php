<?php
session_start();
ob_start();

function logincontrol () {


	$username=$_SESSION['username'];

	$user_mysql=@mysql_query("select * from users where username='$username'");
	$usernum=@mysql_num_rows($user_mysql);


	if ($usernum==0) {


		header('location:login.php');
	}
}



?>