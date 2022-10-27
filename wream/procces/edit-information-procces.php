<?php
include'../config/connect.php';

if (isset($_POST['editinfo'])) {
	$user_id=$_POST['user_id1'];
	$user_id_to_name=mysql_query("select username from users where user_id='$user_id'");
	$username=mysql_fetch_assoc($user_id_to_name);

	$password=trim(md5($_POST['password']));
	$password=strip_tags(md5($_POST['password']));
	$password=htmlspecialchars(md5($_POST['password']));

	$email=trim($_POST['email']);
	$email=strip_tags($_POST['email']);
	$email=htmlspecialchars($_POST['email']);

	$update_mysql=mysql_query("UPDATE users SET password='$password',usermail='$email' WHERE user_id='$user_id'");

	if (mysql_affected_rows()) {
		header('location:../profile.php?updateinfo=ok');
	}
	else{
		header('location:../profile.php?updateinfo=no');
	}
}
?>