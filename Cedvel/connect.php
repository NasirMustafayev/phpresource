<?php
date_default_timezone_set('Asia/Baku');
try {

	$db=new PDO("mysql:host=localhost;dbname=cedvel;charset=utf8",'root','516458488');

	echo "";
}
catch(PDOException $err){
	?>
	<h3 style="color: red">
		<?php
		echo $err->getMessage();
		echo "<b>Verilənlər bazası ilə bağlantı baş tutmadı</b>";?>
	</h3>
<?php }
?>
