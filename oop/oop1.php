<?php

class Data{

	public $data1;
	public $data2;

	public function Method1(){

		echo $this->data1."<br>";
		echo $this->data2."<br>";

	}
}

$object1= new Data;

$object1->data1="Object1 DATA1";
$object1->data2="Object1 DATA2";

$object1->Method1();
////////////////////
$object2= new Data;

$object2->data1="Object2 DATA1";
$object2->data2="Object2 DATA2";

$object2->Method1();
?>