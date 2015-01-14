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
		$this->lastname . " I am a " . $this->gender . "my haircolor is " . $this->haircolor;
	}
}

class Eleanor extends Person
{
	function __construct($firstname, $lastname, $gender, $haircolor) {
		parent::__construct($firstname, $lastname, $gender);
		$this->haircolor = $haircolor;
	}
	function set_newperson(){
		$this->newperson = $this->haircolor;
	}
}

$person1 = new Eleanor("eleanor", "strotz","female", "brown");
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
	

}
 class Obama extends Politician 
 {
 	public $viceprez;

 	function __construct($firstname, $lastname, $views, $party, $viceprez) {
 		parent::__construct($firstname, $lastname, $views, $party);
 		$this->viceprez = $viceprez;
 	}

	 function set_president () 
	 {
		 $this->president = $this->$viceprez;
	 }
function hello()
	{
		return "</br>Hello my name is " . $this->firstname. $this->lastname . "I am apart of the " . $this->party. "party. My vice president is " . $this->viceprez;
	}

 }

$Politician1 = new Obama("barack", "Obama","good" , "democrat" , "Joe Biden");
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
		return "</br>Hey! I'm famous! My name is " . $this->firstname . $this->lastname . " my first good song was " . $this->hitsingle;
	}
}
  class justinbieber extends Singers 
  {
  	function __construct($firstname, $lastname, $hitsingle, $albums) {
  		
  	}

	 function set_famous ()
	 {
		 $this->famous = $this->$ello;
	 }
 }

 $Singers1 = new Singers("justin", "bieber", "baby");
 echo $Singers1->ello();
?>

