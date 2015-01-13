<?php
class person {
	public $firstname;
	public $lastname;
	public $gender;

	fucntion __construct($firstname, $lastname, $gender){
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->gender = $gender;
	}

	function greeting(){
		return "Hello my name is " . $this->firstname . 
		$this->lastname . "I am a " . $this->gender;
	}
}
class Eleanor extends person{
	function getName() 
}

?>