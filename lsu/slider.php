<?php
$mysql=@mysql_connect('localhost','root','516458488');
$db=mysql_select_db('lsu');

if (!$mysql) {
	echo'<h2>MYSQL İLƏ  BAĞLANTI BAŞ TUTMADI!<br>';
	echo '<font color="red">'.mysql_error().'</font></h2>';
}
elseif (!$db) {
	echo '<h2>VERİLƏNLƏR BAZASI İLƏ BAĞLANTI KƏSİLDİ<br>';
	echo '<font color="red">'.mysql_error().'</font></h2>'; }

	$mysql=@mysql_query("select * from slider order by slider_id desc");

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="slider" />
		
		<link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
		<script type="text/javascript" src="slider/engine1/jquery.js"></script>
	</head>
	<body>
		
		<div id="wowslider-container1" style="background-color: grey">
			<div class="ws_images"><ul>
				<center>
				<?php 
				while ($slideral=@mysql_fetch_assoc($mysql)) {
					?>
					<li><a href="slider-xeber.php?slider_id=<?php echo $slideral["slider_id"]; ?>"><img style="max-height: 500px" src="nasir/<?php 

					echo $slideral["slider_imgurl"];?>" alt="<?php echo $slideral["slider_ad"]; ?>" title="<?php echo $slideral["slider_ad"];?>" id="wows1_0"/></a></li>
					<?php
				}
				?>
			</center>
			</ul></div>
	<!--<div class="ws_bullets"><div>
		<a href="nasir/<?php echo $slideral["slider_imgurl"]; ?>" title="LƏNKƏRAN DÖVLƏT UNİVERSİTETİ"><span><img src="nasir/<?php echo $slideral["slider_imgurl"];?>" alt="LƏNKƏRAN DÖVLƏT UNİVERSİTETİ"/>1</span></a>
	</div></div>-->
	<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="slider/engine1/wowslider.js"></script>
<script type="text/javascript" src="slider/engine1/script.js"></script>


</body>
</html>