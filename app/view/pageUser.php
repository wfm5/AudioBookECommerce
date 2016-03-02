<?php
namespace app\view;
use app\model as model;

class pageUser extends model\pageTemplate{

	/**
	*
	*	@brief User page 
	*
	**/

	private $db;

	public function __construct($db){

		$this->db = $db;

	}

}

?>