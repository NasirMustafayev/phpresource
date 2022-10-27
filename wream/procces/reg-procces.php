<?php
include'../config/connect.php';

if (isset($_POST['reg'])) {

$username=trim($_POST['username']);
$username=strip_tags($_POST['username']);
$username=htmlspecialchars($_POST['username']);

$password=mysql_real_escape_string(md5($_POST['password']));
$password=htmlspecialchars(md5($_POST['password']));

$email=trim($_POST['email']);
$email=strip_tags($_POST['email']);
$email=htmlspecialchars($_POST['email']);

$defaultimg="images/default.png";
$defaultbg="images/defaultbg.png";

if (@mysql_query("INSERT INTO users (user_id,username,password,usermail,userimg,userbg) VALUES (NULL,'$username','$password','$email','$defaultimg','$defaultbg')")) {

	header('location:../registration.php?result=ok');
}
else{

	header('location:../registration.php?result=no');
}
}
?>