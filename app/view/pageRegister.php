<?php
namespace app\view;
use app\model as model;

class pageRegister extends model\pageTemplate{
	
	public function getBody(){

		if(isset($_SESSION['username'])){
			echo '<form method="get">';
			echo '	<button class="" type="submit" name="page" value="pageIndex">Go Home</button>';
			echo '</form>';
		}

	}


}
?>