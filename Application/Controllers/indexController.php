<?php
class IndexController extends BaseController
{
	public function indexAction()
	{
		if(LoginManager::isLogin())
		{
			$this->setView("main");
			return;
		}
		$this->setView("login");
	}
	public function hogeAction()
	{
		echo "Index::hoge";
	}
}