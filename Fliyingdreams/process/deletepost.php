<?php
include'../admin/config/connect.php';
ob_start();
session_start();

$postdetailquery=$db->prepare("SELECT * FROM posts where post_id=:post_id");
$postdetailquery->execute(array(
	'post_id'=>$_GET['pid']));
$showpostdetail=$postdetailquery->fetch(PDO:: FETCH_ASSOC);

$userquery=$db->prepare("SELECT * FROM users where user_mail=:mail");
$userquery->execute(array('mail' => $_SESSION['otheruser_mail']));
$showuser=$userquery->fetch(PDO::FETCH_ASSOC);

if ($showpostdetail['post_author']!=$showuser['user_id']) {
	echo " <meta http-equiv='refresh' content='0;URL=../'>"; 
	exit;
}
else{

	$delete=$db->prepare("DELETE FROM posts where post_id=:post_id");
	$delete->execute(array('post_id'=> $_GET['pid']));

	if ($delete) {
		$postpicture=$_GET['un'];
		unlink("../$postpicture");
		echo " <meta http-equiv='refresh' content='0;URL=../?res=delete'>";  
	}
	else{

		echo " <meta http-equiv='refresh' content='0;URL=../?res=no'>";  
	}
}



?>