<?php
include'../admin/config/connect.php';

if (isset($_POST['signup'])) {

	$name=trim($_POST['name']);
	$name=strip_tags($_POST['name']);
	$name=htmlspecialchars($_POST['name']);

	$lastname=trim($_POST['lastname']);
	$lastname=strip_tags($_POST['lastname']);
	$lastname=htmlspecialchars($_POST['lastname']);

	$email=trim($_POST['email']);
	$email=strip_tags($_POST['email']);
	$email=htmlspecialchars($_POST['email']);

	$password=trim(md5($_POST['password']));
	$password=strip_tags(md5($_POST['password']));
	$password=htmlspecialchars(md5($_POST['password']));

	$rpassword=trim(md5($_POST['rpassword']));
	$rpassword=strip_tags(md5($_POST['rpassword']));
	$rpassword=htmlspecialchars(md5($_POST['rpassword']));

	if ($password!=$rpassword) {
		
		echo " <meta http-equiv='refresh' content='0;URL=../registration?res=1'> "; 
		exit;
	}

	if (strlen($_POST['password'])<6) {
		
		echo " <meta http-equiv='refresh' content='0;URL=../registration?res=2'> "; 
		exit;

	}

	$userquery=$db->prepare("select * from users where user_mail=:email");
	$userquery->execute(array('email' => $email));
	$count=$userquery->rowCount();

	if ($count!=0) {

		echo " <meta http-equiv='refresh' content='0;URL=../registration?res=3'> "; 
		exit;

	}	
	else{
		$insert=$db->prepare("INSERT INTO users SET 
			user_name=:name,
			user_lastname=:lastname,
			user_mail=:email,
			user_password=:password,
			user_authorization=:authorization,
			user_picture=:picture,
			user_bgpicture=:bgpicture");

		$save=$insert-> execute(array(
			'name'=> $name,
			'lastname'=> $lastname,
			'email' => $email,
			'password' => $password,
			'authorization' => 0,
			'picture' => "img/default.png",
			'bgpicture'=>"img/defaultbg.png"));

		if (!$save) {

			echo " <meta http-equiv='refresh' content='0;URL=../registration?reg=no'> "; 
		}
		else {
			@ob_start();
			@session_start();
			$_SESSION['otheruser_mail']=$email;
			echo " <meta http-equiv='refresh' content='0;URL=../index'> "; 
			
		}
	}

}

?>