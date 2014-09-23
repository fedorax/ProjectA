<?php
class BaseView
{
	protected $control = NULL;
	protected $model = NULL;

	public function __construct($control)
	{
		$this->control = $control;
	}
	public function setModel($model)
	{
		$this->model = $model;
	}
	public function render()
	{
		setHeader(PROJECT_NAME);
		if($this->control->hasError())
		{
			setAlert($this->control->getError());
		}
		$this->contents();
		setFooter();
	}
	protected function contents()
	{

	}
}