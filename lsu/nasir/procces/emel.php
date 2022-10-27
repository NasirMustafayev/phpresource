<?php
include'../connect.php';
ob_start();
session_start();

if(isset($_POST['giris'])) {

	if ($_POST['iadi']=='') {
		header('location:../login.php');
	}
	else{
		$iadi=$_POST["iadi"];
		$sifre=md5($_POST["sifre"]);

		if ($iadi && $sifre) {

			$mysql_sorgu=mysql_query("select * from admin where iadi='$iadi' and sifre='$sifre'");
			$verilensorgu=mysql_num_rows($mysql_sorgu);

			if ($verilensorgu>0) {


				$_SESSION['iadi']=$iadi;

				header('location:../index.php');
			}
			else{
				header('location:../login.php?cavab=no');
			}
		}
	}
}



////////MENYULAR/////////


if (isset($_POST['menyu_elaveet'])) {
	$menyu_ad= $_POST["menyu_ad"];
	$menyu_url= $_POST["menyu_url"];
	
	if (@mysql_query("INSERT INTO `menyular` (`menyu_id`, `menyu_ad`, `menyu_url`) VALUES (NULL,'$menyu_ad','$menyu_url')")) 
	{

		header('location:../menyu-elaveet.php?cavab=ok');
	}
	else{

		header('location:../menyu-elaveet.php?cavab=no');
	}
	
}
if (isset($_POST['menyu_duzeliset'])) {
	$menyu_id=$_POST['menyu_id'];
	$menyu_ad= $_POST["menyu_ad"];
	$menyu_url= $_POST["menyu_url"];

	
	if (mysql_query("update menyular set menyu_ad = '$menyu_ad', menyu_url = '$menyu_url' where menyu_id = '$menyu_id'")) 
	{

		header('location:../menyular.php?cavab=ok');
	}
	else{

		header('location:../menyular.php?cavab=no');
	}
	
}
if ($_GET['menyu_sil']=="ok") {
	$menyu_id=$_GET['menyu_id'];
	
	if (mysql_query("delete from menyular where menyu_id = '$menyu_id'")) 
	{

		header('location:../menyular.php?cavab=ok');
	}
	else{

		header('location:../menyular.php?cavab=no');
	}
	
}



/////////SLAYDLAR////////


if (isset($_POST['slider_elaveet'])) {

	$slider_ad=$_POST['slider_ad'];
	$slider_terkib=$_POST['slider_terkib'];
	$slider_sira=$_POST['slider_sira'];
	$slider_tube=$_POST['slider_tube'];
	$tarix=date('Y.m.d');
	$uploads_dir='../uploads/slide';

	@$tmp_name= $_FILES['slidesekil']["tmp_name"];
	@$name= $_FILES['slidesekil']["name"];
	$benzersizsay1=rand(20000,32000);
	$benzersizsay2=rand(20000,32000);
	$benzersizsay3=rand(20000,32000);	
	$benzersizsay4=rand(20000,32000);

	$benzersizad=$benzersizsay1.$benzersizsay2.$benzersizsay3.$benzersizsay4;

	$refimgurl=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$sliderelaveet=mysql_query("insert into slider(slider_ad,slider_imgurl,slider_terkib,slider_tarix,slider_tube) values('$slider_ad','$refimgurl','$slider_terkib','$tarix','$slider_tube')");

	if (mysql_affected_rows()) {

		header('location:../sliders.php?cavab=ok');
	}
	else{
		header('location:../slider-elaveet.php?cavab=no');
	}
}

if ($_GET['slider_sil']=="ok") {
	$slider_id=$_GET['slider_id'];
	if (mysql_query("delete from slider where slider_id = '$slider_id'")) 
	{
		$sliderimgyol=$_GET['sliderdelimg'];

		unlink("../$sliderimgyol");

		header('location:../sliders.php?cavab=ok');
	}
	else{

		header('location:../sliders.php?cavab=no');
	}
	
}
if (isset($_POST['slider_siradeyis'])) {
	$slider_id=$_POST['slider_id'];
	$slider_sira= $_POST["slider_sira"];
	
	if (mysql_query("update slider set slider_sira = '$slider_sira' where slider_id='$slider_id'")) 
	{

		header('location:../sliders.php?cavab=ok');
	}
	else{

		header('location:../sliders.php?cavab=no');
	}
	
}

if (isset($_POST['slider_duzeliset'])) {
	$slider_id=$_POST['slider_id'];
	$slider_ad=$_POST['slider_ad'];
	$slider_terkib= $_POST['slider_terkib'];
	$slider_tube=$_POST['slider_tube'];
	$slider_sira= $_POST['slider_sira'];
	$uploads_dir='../uploads/slide';

	@$tmp_name= $_FILES['slidesekil-duzelis']["tmp_name"];
	@$name= $_FILES['slidesekil-duzelis']["name"];
	$benzersizsay1=rand(20000,32000);
	$benzersizsay2=rand(20000,32000);
	$benzersizsay3=rand(20000,32000);	
	$benzersizsay4=rand(20000,32000);

	$benzersizad=$benzersizsay1.$benzersizsay2.$benzersizsay3.$benzersizsay4;

	$refimgurl=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	if (mysql_query("update slider set slider_ad = '$slider_ad', slider_terkib = '$slider_terkib',slider_sira='$slider_sira', slider_imgurl='$refimgurl',slider_tube='$slider_tube' where slider_id = '$slider_id'")) 
	{

		header('location:../sliders.php?cavab=ok');
	}
	else{

		header('location:../sliders.php?cavab=no');
	}
	
}


///////SEHIFELER///////////



if (isset($_POST['sehife_elaveet'])) {
	$sehife_ad= $_POST["sehife_ad"];
	$sehife_tarix=$_POST['sehife_tarix'];
	$sehife_terkib= $_POST["sehife_terkib"];
	$sehife_sira= $_POST["sehife_sira"];
	$sehife_anasehife=$_POST['sehife_anasehife'];
	
	if (@mysql_query("insert into sehifeler (sehife_ad,sehife_tarix,sehife_terkib,sehife_sira,sehife_anasehife) values ('$sehife_ad','$sehife_tarix','$sehife_terkib','$sehife_sira','$sehife_anasehife')")) 
	{

		header('location:../sehife-elaveet.php?cavab=ok');
	}
	else{

		header('location:../sehife-elaveet.php?cavab=no');	
	}
	
}

if ($_GET['sehife_sil']=="ok") {
	$sehife_id=$_GET['sehife_id'];
	
	if (mysql_query("delete from sehifeler where sehife_id = '$sehife_id'")) 
	{

		header('location:../sehifeler.php?cavab=ok');
	}
	else{

		header('location:../sehifeler.php?cavab=no');
	}
	
}
if (isset($_POST['sehife_duzeliset'])) {
	$sehife_id=$_POST['sehife_id'];
	$sehife_ad=$_POST['sehife_ad'];
	$sehife_terkib= $_POST['sehife_terkib'];
	$sehife_sira= $_POST['sehife_sira'];
	$sehife_tarix=$_POST['sehife_tarix'];

	
	if (mysql_query("update sehifeler set sehife_ad = '$sehife_ad', sehife_terkib = '$sehife_terkib',sehife_sira='$sehife_sira', sehife_tarix='$sehife_tarix' where sehife_id = '$sehife_id'")) 
	{

		header('location:../sehife-duzelis.php?cavab=ok&sehife_id=$sehife_id');
	}
	else{

		header('location:../sehife-duzelis.php?cavab=no&sehife_id=$sehife_id');
	}
	
}



/////////XEBERLER//////////

if ($_GET['xeber_sil']=="ok") {
	$xeber_id=$_GET['xeber_id'];
	
	if (mysql_query("delete from xeberler where xeber_id = '$xeber_id'")) 
	{

		$xeberimg=$_GET['xeberdelimg'];

		unlink("../$xeberimg");

		header('location:../xeberler.php?cavab=ok');
	}
	else{

		header('location:../xeberler.php?cavab=no');
	}
	
}

if (isset($_POST['xeber_elaveet'])) {

	$xeber_ad=$_POST['xeber_ad'];
	$tarix=date('Y.m.d');
	$xeber_terkib=$_POST['xeber_terkib'];
	$xeber_tube=$_POST['xeber_tube'];
	$uploads_dir='../uploads/xeber';
	$uploads_dir_terkib='../uploads/xeber/terkib';


	@$tmp_name= $_FILES['xeber_basliqfoto']["tmp_name"];
	@$name= $_FILES['xeber_basliqfoto']["name"];

	$benzersizsay1=rand(20000,32000);
	$benzersizsay2=rand(20000,32000);
	$benzersizsay3=rand(20000,32000);	
	$benzersizsay4=rand(20000,32000);

	$benzersizad=$benzersizsay1.$benzersizsay2.$benzersizsay3.$benzersizsay4;

	$refimgurl=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$xeberelaveet=mysql_query("insert into xeberler(xeber_ad,xeber_tarix,xeber_img,xeber_terkib,xeber_tube) values('$xeber_ad','$tarix','$refimgurl','$xeber_terkib','$xeber_tube')");

	if (mysql_affected_rows()) {

		header('location:../xeberler.php?cavab=ok');
	}
	else{
		header('location:../xeberler.php?cavab=no');
	}
}
if (isset($_POST['xeber_addphoto'])) {
	$xeber_id=$_POST['xeber_id'];
	$uploads_dir_terkib='../uploads/xeber/terkib';

	$benzersizsay1=rand(20000,32000);
	$benzersizsay2=rand(20000,32000);
	$benzersizsay3=rand(20000,32000);	
	$benzersizsay4=rand(20000,32000);

	$benzersizad=$benzersizsay1.$benzersizsay2.$benzersizsay3.$benzersizsay4;
//1-ci
	if (isset($_FILES['terkibfoto1'])) {
		@$tmp_name= $_FILES['terkibfoto1']["tmp_name"];
		@$name= $_FILES['terkibfoto1']["name"];
		$refimgurl1=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir_terkib/$benzersizad$name");
	}
//2-ci
	if (isset($_FILES['terkibfoto2'])) {
		@$tmp_name= $_FILES['terkibfoto2']["tmp_name"];
		@$name= $_FILES['terkibfoto2']["name"];
		$refimgurl2=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir_terkib/$benzersizad$name");
	}
//3-cü
	if (isset($_FILES['terkibfoto3'])) {
		@$tmp_name= $_FILES['terkibfoto3']["tmp_name"];
		@$name= $_FILES['terkibfoto3']["name"];
		$refimgurl3=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir_terkib/$benzersizad$name");
	}
//4-cü
	if (isset($_FILES['terkibfoto4'])) {
		@$tmp_name= $_FILES['terkibfoto4']["tmp_name"];
		@$name= $_FILES['terkibfoto4']["name"];
		$refimgurl4=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir_terkib/$benzersizad$name");
	}
//5-ci
	if (isset($_FILES['terkibfoto5'])) {
		@$tmp_name= $_FILES['terkibfoto5']["tmp_name"];
		@$name= $_FILES['terkibfoto5']["name"];
		$refimgurl5=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir_terkib/$benzersizad$name");
	}
//6-ci
	if (isset($_FILES['terkibfoto6'])) {
		@$tmp_name= $_FILES['terkibfoto6']["tmp_name"];
		@$name= $_FILES['terkibfoto6']["name"];
		$refimgurl6=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir_terkib/$benzersizad$name");
	}
	$xeber_addphotos1=mysql_query("insert into xeber_qalereya(xeber_id,xeber_terkibimg) values('$xeber_id','$refimgurl1')");
	$xeber_addphotos2=mysql_query("insert into xeber_qalereya(xeber_id,xeber_terkibimg) values('$xeber_id','$refimgurl2')");
	$xeber_addphotos3=mysql_query("insert into xeber_qalereya(xeber_id,xeber_terkibimg) values('$xeber_id','$refimgurl3')");
	$xeber_addphotos4=mysql_query("insert into xeber_qalereya(xeber_id,xeber_terkibimg) values('$xeber_id','$refimgurl4')");
	$xeber_addphotos5=mysql_query("insert into xeber_qalereya(xeber_id,xeber_terkibimg) values('$xeber_id','$refimgurl5')");
	$xeber_addphotos6=mysql_query("insert into xeber_qalereya(xeber_id,xeber_terkibimg) values('$xeber_id','$refimgurl6')");
	if (mysql_affected_rows()) {

		header('location:../xeber-qalereya.php?cavab=ok');
	}
	else{
		header('location:../xeber-qalereya.php?cavab=no');
	}
}
    /*foreach ($_FILES["terkibfoto"]["error"] as $upload => $error) {
    	if ($error == UPLOAD_ERR_OK) {

        $img_source = $_FILES["terkibfoto"]["tmp_name"][$upload];

        $img_name = $_FILES["terkibfoto"]["name"][$upload];



        move_uploaded_file($img_source,$uploads_dir_terkib.'/'.$img_name);

        $terkibimg = "../uploads/terkib/".$img_name."";

        $xeberid=mysql_query("select from xeberler");
        $xeberidal=mysql_fetch_assoc($xeberid);
		 $uploadimage = mysql_query("insert into xeber_qalereya(xeber_id,xeber_terkibimg) values('17','$terkibimg')");
		} 
	}*/


	if (isset($_POST['xeber_duzeliset'])) {
		$xeber_id=$_POST['xeber_id'];
		$xeber_ad=$_POST['xeber_ad'];
		$xeber_terkib= $_POST['xeber_terkib'];
		$xeber_tube=$_POST['xeber_tube'];
		$uploads_dir='../uploads/xeber';

		@$tmp_name= $_FILES['basliqfoto-duzelis']["tmp_name"];
		@$name= $_FILES['basliqfoto-duzelis']["name"];
		$benzersizsay1=rand(20000,32000);
		$benzersizsay2=rand(20000,32000);
		$benzersizsay3=rand(20000,32000);	
		$benzersizsay4=rand(20000,32000);

		$benzersizad=$benzersizsay1.$benzersizsay2.$benzersizsay3.$benzersizsay4;

		$refimgurl=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


		if (mysql_query("update xeberler set xeber_ad = '$xeber_ad', xeber_terkib = '$xeber_terkib', xeber_img='$refimgurl',xeber_tube='$xeber_tube' where xeber_id = '$xeber_id'")) 
		{

			header('location:../xeber-duzelis.php?cavab=ok&xeber_id=$xeber_id');
		}
		else{

			header('location:../xeber-duzelis.php?cavab=no&xeber_id=$xeber_id');
		}
		
	}
///////ƏLAMƏTDAR GÜNLƏR///////

	if (isset($_POST['egun_elaveet'])) {

		$egun_ad=$_POST['egun_ad'];
		$ay=$_POST['ay'];
		$gun=$_POST['gun'];
		$egun_terkib=$_POST['egun_terkib'];
		$uploads_dir='../uploads/egun';

		@$tmp_name= $_FILES['egunfoto']["tmp_name"];
		@$name= $_FILES['egunfoto']["name"];

		$benzersizsay1=rand(20000,32000);
		$benzersizsay2=rand(20000,32000);
		$benzersizsay3=rand(20000,32000);	
		$benzersizsay4=rand(20000,32000);

		$benzersizad=$benzersizsay1.$benzersizsay2.$benzersizsay3.$benzersizsay4;

		$refimgurl=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$egunelaveet=mysql_query("insert into egun(egun_ad,egun_tarix,egun_img,egun_terkib) values('$egun_ad','$ay,$gun','$refimgurl','$egun_terkib')");

		if (mysql_affected_rows()) {

			header('location:../egun-elaveet.php?cavab=ok');
		}
		else{
			header('location:../egun-elaveet.php?cavab=no');
		}
	}
	if ($_GET['egun_sil']=="ok") {
		$egun_id=$_GET['egun_id'];
		
		if (mysql_query("delete from egun where egun_id = '$egun_id'")) 
		{

			$egunimg=$_GET['egundelimg'];

			unlink("../egunimg");

			header('location:../egunler.php?cavab=ok');
		}
		else{

			header('location:../egunler.php?cavab=no');
		}
		
	}


                                           ///////SOSIAL ŞƏBƏKƏLƏR///////


//FACEBOOK
	if (isset($_POST['fbdeyis'])) {
		$facebook= $_POST["facebook"];
		
		if (mysql_query("update social set facebook = '$facebook'")) 
		{

			header('location:../index.php?cavab=ok');
		}
		else{

			header('location:../index.php?cavab=no');
		}
		
	}

//YOUTUBE
	if (isset($_POST['ytdeyis'])) {
		$youtube= $_POST["youtube"];
		
		if (mysql_query("update social set youtube = '$youtube'")) 
		{

			header('location:../index.php?cavab=ok');
		}
		else{

			header('location:../index.php?cavab=no');
		}
		
	}

//TWITTER
	if (isset($_POST['ttdeyis'])) {
		$twitter= $_POST["twitter"];
		
		if (mysql_query("update social set twitter = '$twitter'")) 
		{

			header('location:../index.php?cavab=ok');
		}
		else{

			header('location:../index.php?cavab=no');
		}
		
	}

//INSTAGRAM
	if (isset($_POST['insdeyis'])) {
		$instagram= $_POST["instagram"];
		
		if (mysql_query("update social set instagram = '$instagram'")) 
		{

			header('location:../index.php?cavab=ok');
		}
		else{

			header('location:../index.php?cavab=no');
		}
		
	}
                                      ////////MAIL//////////

	if (isset($_POST['mailupdate'])) {
		$smtpuser=$_POST['$smtpuser'];
		$smtphost= $_POST["$smtphost"];
		$smtport= $_POST["$smtpport"];
		$smtppass=$_POST['smtppass'];
		
		if (mysql_query("update mail set smtpuser = '$smtpuser', smtphost = '$smtphost', smtpport='$smtpport', smtppass='$smtppass' where mail_id='1'")) 
		{

			header('location:../mail_parametr.php?cavab=ok');
		}
		else{

			header('location:../mail_parametr.php?cavab=no');
		}
		
	}
/////////UMUMI////////
	if (isset($_POST['logoduzelis'])) {

		$umumi_id=$_GET['umumi_id'];
		$uploads_dir='../uploads/logo';

		@$tmp_name= $_FILES['logo']["tmp_name"];
		@$name= $_FILES['logo']["name"];
		$benzersizsay=rand(20000,32000);
		$benzersizsay=rand(20000,32000);
		$benzersizsay=rand(20000,32000);	
		$benzersizsay=rand(20000,32000);

		$benzersizad=$benzersizsay.$benzersizsay.$benzersizsay.$benzersizsay;

		$reflogourl=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		if (@mysql_query("update umumi set logo ='$reflogourl' where umumi_id='1'")) 
		{

			header('location:../index.php');
		}
		else{
			header('location:../index.php');
		}
	}
	if (isset($_POST['kecid_elaveet'])) {

		$kecid_url=$_POST['kecid_url'];
		$kecid_ad=$_POST['kecid_ad'];
		$uploads_dir='../uploads/links';

		@$tmp_name= $_FILES['kecidikon']["tmp_name"];
		@$name= $_FILES['kecidikon']["name"];
		$benzersizsay=rand(20000,32000);
		$benzersizsay=rand(20000,32000);
		$benzersizsay=rand(20000,32000);	
		$benzersizsay=rand(20000,32000);

		$benzersizad=$benzersizsay.$benzersizsay.$benzersizsay.$benzersizsay;

		$refkecidimg=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		if (@mysql_query("insert into kecidler(kecid_url,kecid_ad,kecid_img) values('$kecid_url','$kecid_ad','$refkecidimg')"))
		{

			header('location:../index.php');
		}
		else{
			header('location:../index.php');
		}
	}
	if ($_GET['kecid_sil']=="ok") {
		$kecid_id=$_GET['kecid_id'];
		
		if (mysql_query("delete from kecidler where kecid_id = '$kecid_id'")) 
		{

			$kecidimg=$_GET['keciddelimg'];

			unlink("../$kecidimg");

			header('location:../index.php');
		}
		else{

			header('location:../index.php');
		}
		
	}
	if (isset($_POST['kecidimg_duzelis'])) {
		$uploads_dir="../uploads/links";
		@$tmp_name= $_FILES['kecidikon']["tmp_name"];
		@$name= $_FILES['kecidikon']["name"];
		$benzersizsay=rand(20000,32000);
		$benzersizsay=rand(20000,32000);
		$benzersizsay=rand(20000,32000);	
		$benzersizsay=rand(20000,32000);

		$benzersizad=$benzersizsay.$benzersizsay.$benzersizsay.$benzersizsay;

		$refkecidimg=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$kecidimg_duzelis=@mysql_query("update kecidler set kecid_img='$refkecidimg' where kecid_id=".$_POST['kecid_id']." ");
		if (mysql_affected_rows()) {

			header('location:../index.php');
		}
		else{
			header('location:../index.php');
		}


	}
	if (isset($_POST['kecid_urldeyis'])) {

		$kecid_url=$_POST['kecid_url'];

		$kecid_urldeyis=@mysql_query("update kecidler set kecid_url='$kecid_url' where kecid_id=".$_POST['kecid_id']." ");
		if (mysql_affected_rows()) {

			header('location:../index.php');
		}
		else{
			header('location:../index.php');
		}

	}
	if (isset($_POST['kecid_addeyis'])) {

		$kecid_ad=$_POST['kecid_ad'];

		$kecid_urldeyis=@mysql_query("update kecidler set kecid_ad='$kecid_ad' where kecid_id=".$_POST['kecid_id']." ");
		if (mysql_affected_rows()) {

			header('location:../index.php');
		}
		else{
			header('location:../index.php');
		}

	}
	?>