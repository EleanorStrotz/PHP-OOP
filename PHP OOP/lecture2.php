<!-- Lecture 2 -->

<!-- Example 1 -->
<?php
class Bird {
	public $orgin = "default name";
	public $breed = "best breed";
	public $gender = "female";
	public $price = 0;

		function __construct($orgin, $breed, $gender, $price){
			$this->orgin = $orgin;
			$this->breed = $breed;
			$this->gender = $gender;
			$this->price = $price;
		}
		function getOrgin(){
			return "This birds name is: " . $this->orgin . "</br> its last name is: " . $this->breed . "</br> This bird is a: " . $this->gender . 
			"</br> The price is a: " . $this->price;
		}
	} 

class cat {
	public $orgin = "feline";
	public $breed = "yellow";
	public $gender = "male";
	public $price = "12";

	function __construct($orgin, $breed, $gender, $price){
		$this->orgin = $orgin;
		$this->breed = $breed;
		$this->gender = $gender;
		$this->price = $price;
	}

	function getBreed(){
		return "</br></br>This cat is a: " . $this->orgin . "</br>Its last name is: " . $this->breed . "</br>It  is a: " . $this->gender . "</br>The price is: " . $this->price;
	}
}

class mouse {
	public $orgin = "rodent";
	public $breed = "rat";
	public $gender = "female";
	public $price = "20";

	function __construct($orgin, $breed, $gender, $price){
		$this->orgin = $orgin;
		$this->breed = $breed;
		$this->gender = $gender;
		$this->price = $price;
	}

	function getGender(){
		return "</br></br>This mouse is a: " . $this->orgin . "</br>Its last name is: " . $this->breed . 
		"</br> Its is a: " . $this->gender . "</br> The price is: " . $this->price;
	}
}

// Example 2

$bird1 = new Bird(" Woodstock ", " Snoopy ", " YellowBird ", " $11 " );
print $bird1->getOrgin();

$cat1 = new Cat(" Garfield ", " Bart ", " Orange Cat ", " $12 ");
print $cat1->getBreed();

$mouse1 = new Mouse(" Jerry ", " tom ", " Brown Mouse ", " $12 ");
print $mouse1->getGender();


?>