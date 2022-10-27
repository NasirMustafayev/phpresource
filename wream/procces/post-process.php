<?php
include'../config/connect.php';
$post_id_del=base64_decode($_GET['id']);
$post_img=base64_decode($_GET['i']);

//$post_author=mysql_query("select post_author from posts where post_id='$post_id'");
//$post_author_control=mysql_fetch_assoc($post_author);

if ($_GET['process']=='delete') {

	$delete_post=mysql_query("delete from posts where post_id='$post_id_del'");

	if (mysql_affected_rows()) {
		header('location:../index.php?del=ok');

		unlink("../$post_img");
	}
	else{

		header('location:../index.php?del=no');
	}

}
if ($_GET['process']=='update'){
	$post_id=base64_decode($_POST['post_id']);
	if (isset($_POST['update'])) {
		$post_title=trim($_POST['post_title']);
		$post_title=strip_tags($_POST['post_title']);
		$post_title=htmlspecialchars($_POST['post_title']);

		$post=trim($_POST['post']);
		$post=strip_tags($_POST['post']);
		$post=htmlspecialchars($_POST['post']);

		$post_date=date('Y.m.d');
		$post_author=$_POST['post_author'];
		$author_img=$_POST['author_img'];
		$uploads_dir='../uploads/post';

		@$tmp_name= $_FILES['postimg']["tmp_name"];
		@$name= $_FILES['postimg']["name"];
		$benzersizsay1=rand(20000,32000);
		$benzersizsay2=rand(20000,32000);
		$benzersizsay3=rand(20000,32000);	
		$benzersizsay4=rand(20000,32000);

		$benzersizad=$benzersizsay1.$benzersizsay2.$benzersizsay3.$benzersizsay4;

		$post_img=substr($uploads_dir, 3)."/".$benzersizad.$name;
		move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		if ($tmp_name==0) {
			$update_post=mysql_query("UPDATE posts set post_title='$post_title',post='$post',post_date='$post_date',post_author='$post_author',author_img='$author_img' where post_id='$post_id'");
		}
		else{
			$update_post=mysql_query("UPDATE posts set post_title='$post_title',post_img='$post_img',post='$post',post_date='$post_date',post_author='$post_author',author_img='$author_img' where post_id='$post_id'");
		}
		if (mysql_affected_rows()) {
			header('location:../index.php?update=ok');
		}
		else{
			header('location:../index.php?update=no');
		}
	}
}
?>