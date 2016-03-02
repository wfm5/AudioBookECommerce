<?php
namespace app\view;
use app\model as model;

class pageLogout extends model\pageTemplate{
	
	public function getBody(){

		if(isset($_SESSION['username'])){
			session_unset();
			echo '<p>Logout Successful.</p>';
		}
		echo '<form method="get">';
		echo '	<button class="" type="submit" name="page" value="pageIndex">Go Home</button>';
		echo '</form>';

	}


}
?>