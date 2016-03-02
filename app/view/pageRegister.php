<?php
namespace app\view;
use app\model as model;

class pageRegister extends model\pageTemplate{
	
	private $db;

	public function __construct($db){

		$this->db = $db;

	}

	public function getBody($db){

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
					<h2>New User Sign Up</h2>
					<h5>Welcome!</h5>
					<form method="get">
						<label>Email</label>
						<input type="text" name="email" required><br>
						<label>Username</label>
						<input type="text" name="username" required></br>
						<label>Password</label>
						<input type="text" name="password" required></br>
						<label>Retype Password</label>
						<input type="text" name="rePass" required></br>
						<button type="submit" name="page" value="pageRegister">Register</button>
					</form>
					<form method="get">
						<button type="submit" name="page" value="pageLogin">Sign In</button>
					</form>
				</div>
				';
			}else{



			}
		}

	}


}
?>