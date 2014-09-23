<?php
class LogoutController extends BaseController
{
	public function indexAction()
	{
		LoginManager::Logout();
		$this->setView("login");
	}
}
?>