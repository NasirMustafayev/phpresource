<?php
include'../admin/config/connect.php';
ob_start();
session_start();

$userquery=$db->prepare("select * from users where user_mail=:usermail");
$userquery->execute(array('usermail' => $_SESSION['otheruser_mail']));
$showuser=$userquery->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['updatedetail'])) {

	$accounttype=trim($_POST['accounttype']);
	$accounttype=strip_tags($_POST['accounttype']);
	$accounttype=htmlspecialchars($_POST['accounttype']);

	$company_name=trim($_POST['company_name']);
	$company_name=strip_tags($_POST['company_name']);
	$company_name=htmlspecialchars($_POST['company_name']);

	$company_address=trim($_POST['company_address']);
	$company_address=strip_tags($_POST['company_address']);
	$company_address=htmlspecialchars($_POST['company_address']);

	$update=$db->prepare("UPDATE users SET
		user_type=:accounttype,
		user_companyname=:company_name,
		user_companyaddress=:company_address
		WHERE user_id=:id
		");

	$save=$update->execute(array(
		'accounttype'=>$accounttype,
		'company_name'=>$company_name,
		'company_address'=>$company_address,
		'id'=>$showuser['user_id']
	));

	if (!$save) {

		echo " <meta http-equiv='refresh' content='0;URL=../settings?res=no'>";  
	}
	else {
		header("location:../settings?res=ok");
	}


}
?>