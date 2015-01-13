<?php
// dont put () in a class
class dog {
 public $firstname;
 public $lastname;
 public $gender;

 function __construct($firstname, $lastname, $gender){
 	$this->firstname = $firstname;
 	$this->lastname = $lastname;
 	$this->gender = $gender;
 }

 	function greeting(){
		return "Hello this dogs gender is a " . $this->gender;
	}

 
} 	 
	$dog1 = new dog("Sweetie", "Strotz", "Girl");
    
    // rember to put () at the end
	echo $dog1->greeting();

?>