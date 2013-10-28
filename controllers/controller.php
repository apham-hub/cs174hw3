<?php

require_once("controllers/controller.php");
require_once("models/model.php");

$controller = new Controller();
$controller -> invoke();

class Controller {
	public $model;

	public function __contruct()
	{
		$this->model = new Model();
	}

	public function invoke()
	{
		
	}
?>
