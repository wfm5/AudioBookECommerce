<?php
namespace app\model;

class bookMaker{

	//Static class that connects to the data model

	public static function makeBook(){

		return new book();

	}
	
}

?>