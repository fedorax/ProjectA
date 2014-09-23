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
}