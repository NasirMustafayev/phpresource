<?php
include'connect.php';

$query1=$db->prepare("SELECT * FROM users where user_id=:id");
$query1->execute(array('id'=> $_POST['id']));
$show1=$query1->fetch(PDO::FETCH_ASSOC);?>
<div class="data col-md">
	<h3><?php echo $show1['user_name']." ".$show1['user_lastname']." | ".$show1['user_mail'];?></h3>
</div>