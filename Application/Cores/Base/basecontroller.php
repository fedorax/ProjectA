<?php
class BaseController
{
	public $name = null;
	public $controller = null;
	public $action = null;
	public $model = null;
	public $view = null;

	public function __construct()
	{
		$this->controller = get_class($this);

		$idx = strrpos(strtoupper($this->controller), "CONTROLLER");
		if($idx != false)
		{
			$this->name = ucfirst(substr($this->controller, 0, $idx));
		}
		self::setModel($this->name);
		self::setView($this->name);
	}

	public function setAction($name)
	{
		$act = $name;
		$idx = strrpos(strtoupper($name), "ACTION");
		if($idx != false)
		{
			$act = substr($name, 0, $idx);
		}
		$this->action = ucfirst($act)."Action";

	}

	public function setModel($name)
	{
		$model = $name;
		$idx = strrpos(strtoupper($name), "MODEL");
		if($idx != false)
		{
			$model = substr($name, 0, $idx);
		}
		$this->model = ucfirst($model)."Model";

	}
	public function setView($name)
	{
		$view = $name;
		$idx = strrpos(strtoupper($name), "VIEW");
		if($idx != false)
		{
			$view = substr($name, 0, $idx);
		}
		$this->view = ucfirst($view)."View";

	}

	public function indexAction()
	{

	}
}
?>