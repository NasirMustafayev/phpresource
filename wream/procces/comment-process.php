<?php
include'../config/connect.php';

if (isset($_POST['comment-button'])) {
	
	$post_id=$_POST['post_id'];

	$comment=trim($_POST['comment']);
	$comment=strip_tags($_POST['comment']);
	$comment=htmlspecialchars($_POST['comment']);

	$comment_author=$_POST['comment_author'];
	$comment_author_img=$_POST['comment_author_img'];
	$comment_date=date('Y.m.d');


	$addcomment=mysql_query("INSERT INTO comments(post_id,comment,comment_author,comment_author_img,comment_date) values('$post_id','$comment','$comment_author','$comment_author_img','$comment_date')");
	if (mysql_affected_rows($addcomment)) {
		header('location:../post.php?post=$post_id');
	}
	else{
		header("location:../post.php?post=$post_id");
	}
}
else{
	echo mysql_error();
}
?>