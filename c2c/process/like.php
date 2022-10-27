<?php  
include'../admin/config/connect.php';
ob_start();
session_start();
$userquery=$db->prepare("select * from users where user_mail=:usermail");
$userquery->execute(array('usermail' => $_SESSION['otheruser_mail']));
$showuser=$userquery->fetch(PDO::FETCH_ASSOC);

$postquery=$db->prepare("SELECT * FROM posts where post_id=:id");
$postquery->execute(array('id'=> $_POST['pid']));
$showposts=$postquery->fetch(PDO::FETCH_ASSOC);

$postauthorquery=$db->prepare("SELECT * FROM users where user_id=:user_id");
$postauthorquery->execute(array('user_id' => $_POST['pai']));
$showpostauthor=$postauthorquery->fetch(PDO::FETCH_ASSOC);

$likequery=$db->prepare("SELECT * FROM likes where user_id=:user_id and post_id=:id");
$likequery->execute(array('user_id'=>$showuser['user_id'] ,'id'=> $_POST['pid']));
$count=$likequery->rowCount();


$pq=$db->prepare("SELECT * FROM posts where post_id=:id and post_author=:au");
$pq->execute(array('id'=> $_POST['pid'],"au"=>$_POST["pai"]));
$postcnt=$pq->rowCount();
if ($postcnt==0) {
	exit();
}


if (isset($_POST['pid'])) {
	if ($showtauthor['user_id']!=$_POST['pai']) {
	# 
	}

	if ($count==0) {

		$insert=$db->prepare("INSERT INTO likes SET
			user_id=:user_id,
			post_id=:post_id");//şöyle yol izleyebilirsin eğer post author ile eşleşiyorsa yıldız eklersin yoksa exit ile işlemi durdurursun
		$save=$insert->execute(array(
			'user_id'=>$showuser['user_id'],
			'post_id'=>$_POST['pid']));

		if (!$save) {

			echo " <meta http-equiv='refresh' content='0;URL=../'>";  
		}
		else {

			$like=$showposts['post_likes']+1;
			$pid=$_POST['pid'];

			$update=$db->prepare("UPDATE posts SET 
				post_likes=:likes
				where post_id=:pid");

			$increase=$update-> execute(array(
				'likes'=> $like,
				'pid' => $pid));

			//Add star
			$addstar=$showpostauthor['user_stars']+1;

			$updatestars=$db->prepare("UPDATE users SET 
				user_stars=:star
				where user_id=:user_id");

			$increasestar=$updatestars-> execute(array(
				'star'=> $addstar,
				'user_id' => $_POST['pai']));

			if (!$increase&&$increasestar) {
				
				echo "0"; exit();
			}
			else{

				echo "1";exit();
			}
		}
	}
	else{
		$delete=$db->prepare("DELETE FROM likes where post_id=:pid");
		$delsave=$delete->execute(array('pid'=> $_POST['pid']));

		if (!$delsave) {
			echo " <meta http-equiv='refresh' content='0;URL=../'>";  
		}
		else{
			$unlike=$showposts['post_likes']-1;
			$pid=$_POST['pid'];

			$update=$db->prepare("UPDATE posts SET 
				post_likes=:unlikes
				where post_id=:pid");

			$reduce=$update-> execute(array(
				'unlikes'=> $unlike,
				'pid' => $pid));

			//Reduce user stars
			$rstar=$showpostauthor['user_stars']-1;

			$updatestars=$db->prepare("UPDATE users SET 
				user_stars=:rstar
				where user_id=:user_id");

			$reducestar=$updatestars-> execute(array(
				'rstar'=> $rstar,
				'user_id' => $showposts['post_author']));


			if (!$reduce&&$reducestar) {
				
				echo "0";  exit();
			}
			else{

				echo "2";  exit();
			}

		}


	}
}
?>