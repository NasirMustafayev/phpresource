<?php
include'../admin/config/connect.php';
ob_start();
session_start();

$userquery=$db->prepare("select * from users where user_mail=:usermail");
$userquery->execute(array('usermail' => $_SESSION['otheruser_mail']));
$showuser=$userquery->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['update'])) {

	$name=trim($_POST['name']);
	$name=strip_tags($_POST['name']);
	$name=htmlspecialchars($_POST['name']);

	$lastname=trim($_POST['lastname']);
	$lastname=strip_tags($_POST['lastname']);
	$lastname=htmlspecialchars($_POST['lastname']);

	$email=trim($_POST['email']);
	$email=strip_tags($_POST['email']);
	$email=htmlspecialchars($_POST['email']);

	$address=trim($_POST['address']);
	$address=strip_tags($_POST['address']);
	$address=htmlspecialchars($_POST['address']);

	$gsm=trim($_POST['gsm']);
	$gsm=strip_tags($_POST['gsm']);
	$gsm=htmlspecialchars($_POST['gsm']);

	$country=trim($_POST['country']);
	$country=strip_tags($_POST['country']);
	$country=htmlspecialchars($_POST['country']);

	$update=$db->prepare("UPDATE users SET 
		user_name=:name,
		user_lastname=:lastname,
		user_address=:address,
		user_gsm=:gsm,
		user_country=:country
		where user_id=:id");

	$save=$update-> execute(array(
		'name'=> $name,
		'lastname'=> $lastname,
		'address' => $address,
		'gsm' => $gsm,
		'country'=>$country,
		'id' => $showuser['user_id']));

	if (!$save) {

		echo " <meta http-equiv='refresh' content='0;URL=../settings?res=no'>";  
	}
	else {
		//$_SESSION['otheruser_mail']=$email;
		header("location:../settings?res=ok");
	}

}

//Hesab şifrəsi dəyişdirmə

if ($_GET['p']==2) {
	if (isset($_POST['updatepass'])) {

		$lastpassword=trim(md5($_POST['lastpassword']));
		$lastpassword=strip_tags(md5($_POST['lastpassword']));
		$lastpassword=htmlspecialchars(md5($_POST['lastpassword']));

		$password=trim(md5($_POST['password']));
		$password=strip_tags(md5($_POST['password']));
		$password=htmlspecialchars(md5($_POST['password']));

		$rpassword=trim(md5($_POST['rpassword']));
		$rpassword=strip_tags(md5($_POST['rpassword']));
		$rpassword=htmlspecialchars(md5($_POST['rpassword']));

		if ($lastpassword!=$showuser['user_password']) {

			echo " <meta http-equiv='refresh' content='0;URL=../editpass?res=3'>";  
			exit;
		}

		if ($password!=$rpassword) {

			echo " <meta http-equiv='refresh' content='0;URL=../editpass?res=1'>";  
			exit;
		}

		if (strlen($_POST['password'])<6) {

			echo " <meta http-equiv='refresh' content='0;URL=../editpass?res=2'>";  
			exit;
		}

		else{

			$updatepass=$db->prepare("UPDATE users SET 
				user_password=:password
				where user_id=:id");

			$savepass=$updatepass-> execute(array(
				'password'=> $password,
				'id' => $showuser['user_id']));

			if (!$savepass) {

				echo " <meta http-equiv='refresh' content='0;URL=../?res=no'>";  

			}
			else {
				echo " <meta http-equiv='refresh' content='0;URL=../?res=ok'>";  

			}

		}
	}
}
?>