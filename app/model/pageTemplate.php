<?php
namespace app\model;

abstract class pageTemplate{

	private $db;

	/****
	*
	*	@brief Main template of every page, including all of the most used functions
	*
	****/

	public function __construct($db){

		$this->db = $db;

	}

	public function get(){
		
	}

	public function getHeader(){
		/**
		*
		*	@brief Creates header of page
		*
		**/

	}
	public function getBody(){
		/**
		*
		*	@brief Creates body of page
		*
		**/

	}
	public function getFooter(){
		/**
		*
		*	@brief Creates footer of page
		*
		**/

	}


}

?>