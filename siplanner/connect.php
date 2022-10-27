<?php
try {

	$db=new PDO("mysql:host=localhost;dbname=siplanner;charset=utf8",'root','516458488');

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
