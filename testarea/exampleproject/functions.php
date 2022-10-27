<?php

function clear($value){
	$cleaning = htmlspecialchars(strip_tags(trim($value)));

	return $cleaning;
}

