<?php
class MainController extends BaseController
{
	public function indexAction()
	{
		$user = isset($_POST['userTxt']) ? $_POST['userTxt'] : "";
		$pass = isset($_POST['passTxt']) ? $_POST['passTxt'] : "";

		if($user != "master" || $pass != "p@ss")
		{
			if(!empty($user) || !empty($pass))
			{
				$this->addError("ユーザまたはパスワードが違います。");
			}
			if(!LoginManager::isLogin())
			{
				$this->setView("login");
				return;
			}
		}
		LoginManager::Login();
	}
}
?>