<?php
namespace app\view;
use app\model as model;

class pageIndex extends model\pageTemplate{
	
	public function getBody(){
		
		/**
		*
		* @brief -> creates the index page functionality for the website
		*
		**/

		echo $this->db;

	}

}

?>