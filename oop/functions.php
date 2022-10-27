<?php
/*
Hesablama sinfi
*/
class Hesabla{

	public $data1;
	public $data2;

	public function hesablama(){

		if ($_POST['proses']==1) {
			echo $this->data1+$this->data2;
		}
		if ($_POST['proses']==2) {
			echo $this->data1-$this->data2;
		}
		if ($_POST['proses']==3) {
			echo $this->data1*$this->data2;
		}
		if ($_POST['proses']==4) {
			echo $this->data1/$this->data2;
		}
	}
}
/*
Crud sinfi
*/
class Crud{

	public $name;
	public $lastname;
	public $email;

	public function insert(){

		$insert=$db->prepare("INSERT INTO article SET
			name=:name,
			lastname=:lastname,
			email=:email");
		$insert->execute(array(
			'name'=> $this->name,
			'lastname'=> $this->lastname,
			'email'=> $this->email));
	}
}
?>