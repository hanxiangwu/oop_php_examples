<?php
class Number{
	public $number1 = '1';
	public $number2 = '2';
	public $number3 = '3';

	protected $number4 = '4';
	private $number5 = '5';
/*
	function iterateObject(){
		foreach($this as $key => $value){
			print "$key => $value\n";
		}
	}
*/
}

$number = new Number;

foreach($number as $key => $value){
	print "$key => $value\n";
}
