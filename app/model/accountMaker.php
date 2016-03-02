<?php
namespace app\model;

class accountMaker{

	//Static class that connects to the data model

	public static function makeAccount($user, $email, $password, $actType, $phNum, $db){
		
		return new account($user, $email, $password, $actType, $phNum, $db);

	}

}

?>
