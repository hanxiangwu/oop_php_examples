<?php
spl_autoload_register(function($class_name){
	include $class_name . '.php';
});

$dog = new Dog;
$cat = new Cat;

$cat->sayHello();