<?php
require_once('connect.php');

$AddWord = $db->prepare("INSERT INTO words VALUES word=:word, word_t=:word_t");
$AddWord->execute(array("word"=>$_POST['word'], "word_t"=>$_POST['word_t']));

?>