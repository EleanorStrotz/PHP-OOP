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