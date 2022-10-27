<?php
include'../config/connect.php';

if (isset($_POST['backgroundimg'])) {

	$user_id=$_POST['userid_bg'];
	$uploads_dir="../uploads/userbg";

	@$tmp_name= $_FILES['userbg']["tmp_name"];
	@$name= $_FILES['userbg']["name"];
	$benzersizsay1=rand(20000,32000);
	$benzersizsay2=rand(20000,32000);
	$benzersizsay3=rand(20000,32000);	
	$benzersizsay4=rand(20000,32000);

	$benzersizad=$benzersizsay1.$benzersizsay2.$benzersizsay3.$benzersizsay4;

	$userbgurl=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$updateuserbg=mysql_query("UPDATE users SET userbg='$userbgurl' where user_id='$user_id'");

	if (mysql_affected_rows()) {

		header('location:../profile.php?updatebg=ok');
	}
	else{
		header('location:../profile.php?updatebg=no');
	}
}
?>