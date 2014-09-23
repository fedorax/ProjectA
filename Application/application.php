<?php

define('CORE_NAME', "Cores");
define('CORE_PATH', realpath(APP_PATH . "/". CORE_NAME)."/");

class Application
{
	private $sessionMgr = null;
	private $route = null;
	private $control = null;
	private $view = null;
	public function __construct()
	{
		self::init();
	}

	public function init()
	{
		require_once CORE_PATH."core.php";
	}

	public function start()
	{
		$this->sessionMgr = new SessionManager();
		self::dispatch();
		self::request();
		self::controller();
		self::model();
		self::action();
		self::view();

	}

	public function dispatch()
	{
		if ('' != $_SERVER['REQUEST_URI']) {
			// パラメーターを"/"で分割
			$params = explode('/', $_SERVER['REQUEST_URI']);
		}

		$this->route = 'index';

		if(count($params) > 2)
		{

			$rt = explode('?', $params[2])[0];
			if($rt != null && $rt != "")
			{
				$this->route = $rt;
				$idx = strrpos($rt, ".php");
				if($idx != false)
				{
					$this->route = substr($rt, 0, $idx);
				}
			}
		}

	}

	public function request()
	{

		//GETとPOSTを全てエスケープ処理 ({}をとって1行にしても可)
		foreach($_GET  as $key => $value){
			$key = strtoupper($key);
			$_GET["$key"]  = htmlspecialchars(stripslashes($value), ENT_QUOTES);
		}

		foreach($_POST as $key => $value){
			$key = strtoupper($key);
			$_POST["$key"] = htmlspecialchars(stripslashes($value), ENT_QUOTES);
		}

	}
	public function controller()
	{
		if(file_exists(CONTROLLER_PATH.$this->route."Controller.php"))
		{
			require_once CONTROLLER_PATH.$this->route."Controller.php";
		}
		else
		{
			$this->route = 'index';
			require_once CONTROLLER_PATH.$this->route."Controller.php";
		}
		$className = ucfirst($this->route)."Controller";
		$this->control = new $className();
	}

	public function action()
	{
		$act = '';
		$g_act = isset($_GET['ACT']) ? $_GET['ACT'] : '';
		$p_act = isset($_POST['ACT']) ? $_POST['ACT'] : '';
		if(!StringUtil::isNullorEmpty($g_act))
		{
			$act = $g_act;
		}

		if (!StringUtil::isNullorEmpty($p_act))
		{
			$act = $p_act;
		}
		if(StringUtil::isNullorEmpty($act))
		{
			$act = 'index';
			if(!StringUtil::isNullorEmpty($this->sessionMgr->Act))
			{
				$act = $this->sessionMgr->Act;
			}
		}
		$actName = strtolower($act)."Action";
		if( method_exists($this->control, $actName)){
			$this->control->setAction($actName);
		}
		else
		{
			$actName = "indexAction";
			$this->contorl->setAction($actName);
		}
		$action = $this->control->action;
		$this->control->$action();
	}
	public function model()
	{
		if(file_exists(MODEL_PATH.$this->control->model.".php"))
		{
			require_once MODEL_PATH.$this->control->model.".php";
		}

	}
	public function view()
	{
		$viewfile = strtolower($this->control->view);
		require_once VIEW_PATH.$viewfile.".php";
		$view = new $this->control->view($this->control);
		$view->setModel($this->control->model);
		$view->render();
	}
}
?>