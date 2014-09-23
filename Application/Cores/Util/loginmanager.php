<?php
class LoginManager
{
	private static $isLogin = false;

	public static function Login()
	{
		$mgr = new SessionManager();
		$mgr->login = true;
		LoginManager::$isLogin = true;
	}

	public static function Logout()
	{
		$mgr = new SessionManager();
		$mgr->login = false;
		LoginManager::$isLogin = false;
	}

	public static function isLogin()
	{
		$mgr = new SessionManager();
		return $mgr->login;
	}
}