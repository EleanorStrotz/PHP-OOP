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

class Eleanor extends Person
{
	var $newperson;

	function set_newperson (hello) {
		$this->newperson = $hello;
	}
}

$person1 = new Person("eleanor", "strotz","female");
echo $person1->greeting();


// __________________________________________________________________________________________________________
// example 2
class Politician
{
	public $firstname;
	public $lastname;
	public $views;
	public $party;

	function __construct($firstname, $lastname, $views, $party)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->views = $views;
		$this->party = $party;
	}
	function hello()
	{
		return "Hello my name is " . $this->firstname. $this->lastname . "I am apart of the " . $this->party. "party.";
	}

}
class Obama extends Politician 
{
	var $president;

	function set_president (hello) 
	{
		$this->president = $hello;
	}
}

$Politician1 = new Politician("barack", "Obama", "democrat");
echo $Politician1->hello();


// _______________________________________________________________________________________________________________________
// example 3
class Singers
{
	public $firstname;
	public $lastname;
	public $hitsingle;

	function __construct($firstname, $lastname, $hitsingle)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->hitsingle = $hitsingle;
	}
	function ello()
	{
		return "Hey! I'm famous! My name is " . $this->firstname . $this->lastname "my first good song was " . $this->hitsingle;
	}
}
function justinbieber extends Singers {
	var $famous;

	function set_famous (ello)
	{
		$this->famous = $ello;
	}
}

$Singers1 = new Singers("justin", "bieber", "baby");(
echo $Singers1->ello();
?>

<!-- I keep getting errors with my code I dont really understand it. It got explained to me today
in class but i still dont get it -->

<!-- { 
	public $eyecolor;
	public function __construct($firstname, $lastname, $gender, $eyecolor)
	{
		super($firstname, $lastname, $gender)
		$this->eyecolor = $eyecolor;
	} 

$person1 = new Person("eleanor", "strotz","female");
echo $person1->greeting();
 -->