<?php
class Person {
	public $firstname;
	public $lastname;
	public $haircolor;

function __construct($firstname, $lastname, $haircolor){
	$this->firstname = $firstname;
	$this->$lastname = $lastname;
	$this->$haircolor = $haircolor;
}

	function greeting(){
		return "Hello my name is " . $this->firstname;
	}
}

$eleanor = new Person("eleanor ", "strotz ", "haricolor ");

echo $eleanor->greeting();

?>

