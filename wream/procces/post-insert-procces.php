<?php
include'../config/connect.php';

if (isset($_POST['write'])) {

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

	$refimgurl=substr($uploads_dir, 3)."/".$benzersizad.$name;
	move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	if (!$tmp_name==0) {
		$addpost=mysql_query("INSERT INTO posts(post_id,post_title,post,post_img,post_date,post_author,author_img) VALUES(NULL,'$post_title','$post','$refimgurl','$post_date','$post_author','$author_img')");}
		else{
			$addpost=mysql_query("INSERT INTO posts(post_id,post_title,post,post_date,post_author,author_img) VALUES(NULL,'$post_title','$post','$post_date','$post_author','$author_img')");
		}

		if (mysql_affected_rows()) {

			header('location:../index.php?result=ok');
		}
		else{
			header('location:../index.php?result=no');
		}
	}
