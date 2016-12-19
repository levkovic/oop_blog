<?php
include_once('m/user_model.php');
include_once('c/C_Base.php');

class C_Logout extends C_Base{

	function __construct(){

	}

	protected function OnInput()
	{

			$_SESSION['auth'] = null;
			header('Location: index.php');
			die();
	}
}