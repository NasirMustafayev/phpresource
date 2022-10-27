<?php
include'../connect.php';

if(isset($_POST['reg'])) {

	$iadi=$_POST['iadi'];
	$sifre=mysql_real_escape_string(md5($_POST['sifre']));
	$email=$_POST['email'];

	if (@mysql_query("INSERT INTO admin  (admin_id,iadi,sifre,email) VALUES (NULL,'$iadi','$sifre','$email')")) {

		header('location:../qeydol.php?reg=ok');
	}
	else{
echo mysql_error();
	}
}
?>