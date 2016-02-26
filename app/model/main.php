<?php
namespace app\model;

class main{

	public function __construct($db){
		
		$page_request = 'app\view\\' .'pageIndex';
		
		if(!empty($_REQUEST) && isset($_REQUEST['page'])){
			$page_request = 'app\classes\\' . $_REQUEST['page'];
			
		}
		$page = new $page_request($db);
		
		$page->get();

	}

}


?>