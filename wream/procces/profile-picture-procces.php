<?php
include'../config/connect.php';

if (isset($_POST['profilepicture'])) {

	$user_id=$_POST['user_id'];
	$uploads_dir="../uploads/userimg";

	@$tmp_name= $_FILES['userimg']["tmp_name"];
	@$name= $_FILES['userimg']["name"];
	$benzersizsay1=rand(20000,32000);
	$benzersizsay2=rand(20000,32000);
	$benzersizsay3=rand(20000,32000);	
	$benzersizsay4=rand(20000,32000);

	$benzersizad=$benzersizsay1.$benzersizsay2.$benzersizsay3.$benzersizsay4;

	$userimgurl=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$updateuserimg=mysql_query("UPDATE users SET userimg='$userimgurl' where user_id='$user_id'");

	if (mysql_affected_rows()) {

		header('location:../profile.php?updateimg=ok');
	}
	else{
		header('location:../profile.php?updateimg=no');
	}
}
?>