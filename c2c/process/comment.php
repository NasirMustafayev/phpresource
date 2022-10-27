<?php 
include'../admin/config/connect.php';
ob_start();
session_start();

$userquery=$db->prepare("SELECT * FROM users where user_mail=:mail");
$userquery->execute(array('mail' => $_SESSION['otheruser_mail']));
$showuser=$userquery->fetch(PDO::FETCH_ASSOC);


if (!isset($_POST['comment'])) {
	echo " <meta http-equiv='refresh' content='0;URL=../'>";  
	exit;
}
else{
	$insert=$db->prepare("INSERT INTO comments SET 
		comment_author=:comment_author,
		post_id=:post_id,
		comment=:comment");

	$save=$insert-> execute(array(
		'comment_author'=> $showuser['user_id'] ,
		'post_id'=> $_POST['post_id'] ,
		'comment' => $_POST['comment']));

	}?>

	<?php
//DELETE comment
	if ($_GET['p']==3) {

		$purl=$_POST['purl'];

		if ($_POST['commentauthor_id']!=$showuser['user_id']) {

			header("Location:$purl?res=block");
		}

		$commentquery=$db->prepare("SELECT * FROM comments where comment_id=:comment_id");
		$commentquery->execute(array('comment_id'=>$_POST['comment_id']));
		$showcomment=$commentquery->fetch(PDO::FETCH_ASSOC);

		if ($showcomment['user_id']!=$showuser['user_id']) {

			header("Location:$purl?res=block");

		}


		else{
			$delete=$db->prepare("DELETE FROM comments where comment_id=:comment_id");
			$save=$delete->execute(array('comment_id'=> $_POST['comment_id']));



			if (!$save) {

				header("location:$purl?dres=no");
			}
			else {

				header("location:$purl?dres=ok");
			}
		}
	}
	?>