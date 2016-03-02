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

	//public function 

}


?>