<!-- lecture 1 -->

<?php
// Example 1
class bird{
	//text
}
class cat{
	//text
}
class mouse{
	//text
}

//Example 2
$bird1 = new bird();
$bird2 = new bird();

$cat1 = new cat();
$cat2 = new cat();

$mouse1 = new mouse();
$mouse2 = new mouse();

//Example 3
class bird {
	public $orgin = "default name";
	public $breed = "best breed";
	public $gender = "female";
	public $price = 0;

}
class cat {
	public $orgin = "feline";
	public $breed = "yellow";
	public $gender = "male";
	public $price = 12;

}
class mouse{
	public $orgin = "rodent";
	public $breed = "rat";
	public $gender = "female";
	public $price = 20;

}

// Example 4 
$bird1 = new Bird();
print $bird->Woodstock;
//default name

$cat1 = new Cat();
print $cat->Garfield;
//default name

$mouse1 = new mouse();
print $mouse->Jerry;

// Example 5
public function myMethod($beak, $wing){
	//stuff
}

public function myMethod($paw, $fur){
	//stuff
}
public function myMethod($nails, $eyes){
	//stuff
}

//Example 6
class Bird {
	public $orgin = "default name";
	public $breed = "best breed";
	public $gender = "female";
	public $price = 0;

	function getBreed(){
		return "{$this->breed}" .
		"{$this->breed}";

	}
}
$bird1 = new Bird();
$bird1->breed = "Pigeon";

Print "The bird's breed is {$bird1->getBreed()}.";

class Cat {
	public $orgin = "feline";
	public $breed = "yellow";
	public $gender = "male";
	public $price = 12;

	function getPrice(){
		return "{$this->price}" .
		"{$this->price}";
	}

}
$cat1 = new Cat();
$cat1->price = "$12";

Print "The price of the cat is {$cat1->getPrice()}.";

class mouse {
	public $orgin = "rodent";
	public $breed = "rat";
	public $gender = "female";
	public $price = 20;

	function getOrgin(){
		return "{$this->orgin}" .
		"{$this->orgin}";
	}
}
$mouse1 = new mouse();
$mouse1->orgin = "rodent";

Print "The orgin of the mouse is {$mouse1->getOrgin}.";



?>

______________________________________________________________________________________________________________________________

<!-- Lecture 2 -->

<!-- Example 1 -->
<?php
class Bird {
	public $orgin = "default name";
	public $breed = "best breed";
	public $gender = "female";
	public $price = 0;

		function__construct($orgin, $breed, $gender, $price){
			$this->orgin = $orgin;
			$this->breed = $breed;
			$this->gender = $gender;
			$this->$price;
		}
		function getOrgin(){
			return "{$this->orgin}" .
			"{$this->orgin}";
		}
	} 

class cat {
	public $orgin = "feline";
	public $breed = "yellow";
	public $gender = "male";
	public $price = 12;

	function__contruct($orgin, $breed, $gender, $price){
		$this->orgin = $orgin;
		$this->breed = $breed;
		$this->gender = $gender;
		$this->price = $price;
	}

	function getBreed(){
		return "{$this->breed}" .
		"{$this->breed}";
	}
}

class mouse {
	public $orgin = "rodent";
	public $breed = "rat";
	public $gender = "female";
	public $price = 20;

	function__contruct($orgin, $breed, $gender, $price){
		$this->orgin = $orgin;
		$this->breed = $breed;
		$this->gender = $gender;
		$this->price = $price;
	}

	function getGender(){
		return "{$this->gender}" .
		"{$this->gender}";
	}
}

// Example 2

$bird1 = new Bird("Woodstock", "Snoopy", "YellowBird" );
print "Bird 1: {$bird1->getBreed()}/n";
// /n creates a new line for your line of writing to go on

$cat1 = new Cat("Garfield", "Bart", "OrangeCat");
print "Cat 1: {$cat1->getGender()}";

$mouse1 = new Mouse("jerry", "tom", "BrownMouse");
print: "Mouse 1: {$mouse1->orgin()}";


?>