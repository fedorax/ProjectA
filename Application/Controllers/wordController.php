<?php
class WordController extends BaseController
{
	public function indexAction()
	{
		$this->model = new WordModel();
		$this->model->tableList = array(
			array("a", "b", "c", "d"),
			array("a", "b", "c", "d"),
			array("a", "b", "c", "d"),
		);
	}

	public function newAction()
	{

	}

}