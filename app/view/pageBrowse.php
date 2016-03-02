<?php
namespace app\view;
use app\model as model;

class pageBrowse extends model\pageTemplate{
	
	//page that shows book data based on

	private $db;

	public function __construct($db){

		$this->db = $db;

	}

	public function getBody(){
		
	}

} 

?>