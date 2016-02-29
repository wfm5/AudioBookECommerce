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

		$this->loginButton();

	}


	public function loginButton(){

		/**
		*
		*	@brief -> create the button that goes to the login features
		*			-> it's a logout button if already logged in
		*
		**/

		if($_SESSION['username'] != null){
			echo '<form method="get">';
			echo '	<>';
			echo '</form>';
		}
	}
}

?>