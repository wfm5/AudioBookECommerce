<?php
namespace app\view;
use app\model as model;

class pageIndex extends model\pageTemplate{
	
	private $db;

	public function __construct($db){

		$this->db = $db;

	}

	public function getBody(){
		
		/**
		*
		* @brief -> creates the index page functionality for the website
		*
		**/

		

	}

}

?>