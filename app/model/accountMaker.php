<?php
namespace app\model;

class accountMaker{

	//Static class that connects to the data model

	public static function makeAccount(){
		
		return new account();

	}

}

?>
