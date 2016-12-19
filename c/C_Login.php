<?php
include_once('m/user_model.php');
include_once('c/C_Base.php');

class C_Login extends C_Base{

	private $email;

	function __construct(){

	}

	protected function OnInput()
	{
		parent::OnInput();
		$this->title = $this->title . ': Login';

	if (isset($_POST['email']) && isset($_POST['password']))
	{
		if (UserModel::user_login($_POST['email'], $_POST['password']))
		{

			$_SESSION['auth'] = $_POST['email'];
			header('Location: index.php');
			die();
		}
	
	$this->email = $_POST['email'];
	}
	}
	
	protected function OnOutput()
	{
		$vars = array('email' => $this->email);
		$this->content = $this->Template('v/v_login.php', $vars);
		parent::OnOutput();
	}	
}