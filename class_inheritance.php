<?php 

class First {
	public $id = 11;
	protected $name = "Harry";

	public function saySomething($word) {
		echo $word;
	}
}

class Second extends First {
	public function getName () {
		echo $this->name;
	}
} 


$second = new Second;

echo $second->getName();

echo $second->saySomething('Hello World');