<?php
session_start();
ob_start();

function logincontrol () {


	$iadi=$_SESSION['iadi'];

	$iadimysql=mysql_query("select * from admin where iadi='$iadi'");
	$iadisay=mysql_num_rows($iadimysql);


	if ($iadisay==0) {


		header('location:login.php');
	}
}



?>