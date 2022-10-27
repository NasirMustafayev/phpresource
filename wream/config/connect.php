<?php
$mysql=@mysql_connect('localhost','root','516458488');
$db=mysql_select_db('wream');

if (!$mysql) {
	echo'<h2>MYSQL İLƏ  BAĞLANTI BAŞ TUTMADI!<br>';
	echo '<font color="red">'.mysql_error().'</font></h2>';
}
elseif (!$db) {
	echo '<h2>VERİLƏNLƏR BAZASI İLƏ BAĞLANTI KƏSİLDİ<br>';
	echo '<font color="red">'.mysql_error().'</font></h2>'; }
	?>