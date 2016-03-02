<?php
namespace app\view;
use app\model as model;

class pageLogin extends model\pageTemplate{
	
	public function getBody(){

		if(isset($_SESSION['username'])){
			echo '<form method="get">';
			echo '	<button class="" type="submit" name="page" value="pageIndex">Go Home</button>';
			echo '</form>';
		}else{

			/**
			*
			*	@brief main functionality for registration
			*
			**/

			if(!isset($_REQUEST['email'])){
				echo '
				<div id="registBody">
					<h2>Sign In</h2>
					<form method="get">
						<label>Username</label>
						<input type="text" name="username" required></br>
						<label>Password</label>
						<input type="text" name="password" required></br>
						<button type="submit" name="page" value="pageLogin">Sign In</button>
					</form>
					<form method="get">
						<button type="submit" name="page" value="pageRegister">Make New Account</button>
					</form>
				</div>
				';
			}else{

				if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
					try{

						

					}catch(Exception $e){

					}
				}

			}
		}

	}

}

?>