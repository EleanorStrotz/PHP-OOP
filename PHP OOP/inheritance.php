<?php
// example 1
class Person 
{
	public $firstname;
	public $lastname;
	public $gender;

	function __construct($firstname, $lastname, $gender)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->gender = $gender;
	}

	function greeting()
	{
		return "Hello my name is " . $this->firstname . 
		$this->lastname . "I am a " . $this->gender;
	}
}


$person1 = new Person("eleanor", "strotz","female");
echo $person1->greeting();
?>


/*
class Eleanor extends person
{ 
	public $eyecolor;

	public function __construct($firstname, $lastname, $gender, $eyecolor)
	{
		super($firstname, $lastname, $gender)
		$this->eyecolor = $eyecolor;
	} */