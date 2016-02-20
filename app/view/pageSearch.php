<?php
namespace app\view;
use app\model as model;

class pageSearch extends model\pageTemplate{

	public function __construct($db){
		
		$page_request = 'app\view\\' .'pageIndex';
		
		if(!empty($_REQUEST) && isset($_REQUEST['page'])){
			$page_request = 'app\view\\' . $_REQUEST['page'];
			
		}
		$page = new $page_request($db);
		
		$page->get();

	}
	
} 

?>