<?php
namespace app\model;

class account{

	private $user;
	private $pass;
	private $email;
	private $actType;
	private $phNum;
	private $db;

	public function __construct($user, $email, $password, $actType, $phNum, $db){
		
		$this->user = $user;
		$this->pass = $password;
		$this->email = $email;
		$this->actType = $actType;
		$this->phNum = $phNum;
		$this->db = $db;

	}

	public function showInfo(){

		return 'username: ' . $this->user . ' password: ' . $this->pass . ' email: ' . $this->email . ' Account Type: ' . $this->actType . ' phone: ' . $this->phNum;

	} 
	public function getUser(){

		return $this->user;
	
	}
	public function getPass(){

		return $this->pass;
	
	}
	public function getEmail(){

		return $this->email;
	
	}
	public function getActType(){

		return $this->actType;
	
	}
	public function getPhone(){

		return $this->phNum;
	
	}

}


?>