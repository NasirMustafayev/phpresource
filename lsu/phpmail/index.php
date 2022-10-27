<?php 
ob_start();
session_start();
include '../nasir/connect.php';

$mailmysql=mysql_query("select * from mail");
$mail=mysql_fetch_assoc($mailmysql);

$smtpuser=$mail['smtpuser'];
$smtphost=$mail['smtphost'];
$smtpport=$mail['smtpport'];
$smtppass=$mail['smtppass'];

if (isset($_POST['contactform'])) {
	
	 $adsoyad = htmlspecialchars(trim($_POST['adsoyad'])); 
	 $telefon = htmlspecialchars(trim($_POST['telefon'])); 
	 $movzu = htmlspecialchars(trim($_POST['movzu'])); 
	 $email = htmlspecialchars(trim($_POST['email'])); 
	 $mesaj = htmlspecialchars(trim($_POST['mesaj'])); 
	 $ip = htmlspecialchars(trim($_POST['contact_ip'])); 


	include 'class.phpmailer.php';
	$epostal=$smtpuser;
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = false;
	$mail->Host = $smtphost;
	$mail->Port = $smtpport;
	$mail->SMTPSecure = 'tls';
	$mail->Username = $smtpuser;
	$mail->Password = $smtppass;
	$mail->SetFrom($mail->Username, $adsoyad);
	$mail->AddAddress($epostal, $adsoyad);
	$mail->CharSet = 'UTF-8';
	$mail->Subject = 'Əlaqə formu';
	$content = '
	<b>Saytdan gələn əlaqə mail</b><br>
	<table align="left" class="tg" style="undefined;table-layout: fixed; width: 535px">
	

	
	
	<tr>
		<td class="tg-031e">Ad Soyad</td>
		<td class="tg-031e">:</td>
		<td class="tg-031e">'.$adsoyad.'</td>
	</tr>
	<tr>
		<td class="tg-031e">Telefon</td>
		<td class="tg-031e">:</td>
		<td class="tg-031e">'.$telefon.'</td>
	</tr>
	<tr>
		<td class="tg-031e">E-Poçt</td>
		<td class="tg-031e">:</td>
		<td class="tg-031e">'.$email.'</td>
	</tr>
	<tr>
		<td class="tg-031e">Mövzu</td>
		<td class="tg-031e">:</td>
		<td class="tg-031e">'.$movzu.'</td>
	</tr>
	<tr>
		<td class="tg-031e">Mesaj</td>
		<td class="tg-031e">:</td>
		<td class="tg-031e">'.$mesaj.'</td>
	</tr>
	<tr>
		<td class="tg-031e">İp Adresi</td>
		<td class="tg-031e">:</td>
		<td class="tg-031e">'.$ip.'</td>
	</tr>
</table>';




$mail->MsgHTML($content);
if($mail->Send()) {

	header("Location:../elaqe.php?contactresult=ok");
} else {
	header("Location:../elaqe.php?contactresult=no");
}



}
?>