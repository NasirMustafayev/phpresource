<?php
include'../admin/config/connect.php';
include'../function/seo-function.php';
ob_start();
session_start();

$userquery=$db->prepare("select * from users where user_mail=:usermail");
$userquery->execute(array('usermail' => $_SESSION['otheruser_mail']));
$showuser=$userquery->fetch(PDO::FETCH_ASSOC);

if ($_FILES['bgpicture']['size']>0) {

	if ($_FILES['bgpicture']['size']>10048576) {
		?>
		<script type="text/javascript">
			alert('Large size');
		</script>
		<?php
		exit;
	}
	$authorizedtype=array('jpg','jpeg','png','gif','bmp');

	$findtype=strtolower(substr( $_FILES['bgpicture']["name"], strpos( $_FILES['bgpicture']["name"],'.')+1));
	if (in_array($findtype, $authorizedtype)===false) {?>
		<script type="text/javascript">
			alert('File type is not allowed');
		</script>
		<?php exit;
	}
	$uploads_dir="../images/users/bg";

	@$tmp_name= $_FILES['bgpicture']["tmp_name"];
	@$name= $_FILES['bgpicture']["name"];

	$benzersizsay1=rand(20000,32000);
	$benzersizsay2=rand(20000,32000);
	$benzersizsay3=rand(20000,32000);	
	$benzersizsay4=rand(20000,32000);

	$benzersizad=$benzersizsay1.$benzersizsay2.$benzersizsay3.$benzersizsay4;

	$bgpicture=substr($uploads_dir, 3)."/".$benzersizad.$name;	
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$lastbgpicture=$showuser['user_bgpicture'];
	unlink("../$lastbgpicture");

	$insert=$db->prepare("UPDATE users SET
		user_bgpicture=:bgpicture
		where user_id=:id");

	$save=$insert-> execute(array(
		'bgpicture'=> $bgpicture,
		'id'=>$showuser['user_id']));

	if (!$save) {

		echo " <meta http-equiv='refresh' content='0;URL=../?res=no'> "; 
	}
	else {
		$insertinlog=$db->prepare("INSERT INTO logs SET
			log_no=:no,
			process_name=:process_name,
			process_author=:author");
		$insertinlog->execute(array(
			'no'=> 2,
			'process_name'=>"Update background picture",
			'author'=>$_SESSION['otheruser_mail']
		));
	}
}

?>