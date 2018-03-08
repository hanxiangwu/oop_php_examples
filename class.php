<?php
class User{
	
	//properties
	public $id = 33;
	public $username;
	public $email;
	public $password;

	//Constructor
	public function __construct($username, $password) {
		//echo 'Constructor Called';
		$this->username = $username;
		$this->password = $password;
	}

	//Methods
	public function register(){
		echo 'User Registered';
	}

	public function login(){
		
		$this->auth_user();
	}

	public function auth_user(){
		echo $this->username . ' is authenticated';

	}

	public function __destruct(){
		//echo 'Destructor Called';
	}
	
}


$User = new User('brad', '1234');

echo $User->username;
$User->register();
$User->login();


