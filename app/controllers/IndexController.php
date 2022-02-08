<?php

declare(strict_types=1);

class IndexController extends ControllerBase
{

	public function indexAction()
	{

		$this->view->products = Products::find();
		$this->view->totalProducts = count(Products::find());
	}
}
