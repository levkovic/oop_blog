<?php 
include_once('m/user_model.php');
include_once('c/C_Base.php');

class C_Registration extends C_Base{

	private $user;

	function __construct(){

	}

	protected function OnInput()
	{
		parent::OnInput();
		$this->title = $this->title . ': Registration';

	if (isset($_POST['email']) && isset($_POST['password']))
	{
		if (UserModel::user_new($_POST['email'], $_POST['password']))
		{
			header('Location: index.php');
			die();
		}
	
	$email = $_POST['email'];
	}
	}
	
	protected function OnOutput()
	{
		$vars = array();
		$this->content = $this->Template('v/v_registration.php', $vars);
		parent::OnOutput();
	}	
}