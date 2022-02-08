<?php

declare(strict_types=1);

class ProductsController extends \Phalcon\Mvc\Controller
{

	public function indexAction()
	{
	}

	public function registerAction()
	{

		$product = new Products();

		$product->assign($this->request->getPost(), ['name', 'description', 'price', 'inventory', 'photo']);

		if ($this->request->hasFiles() && ($photo = $this->request->getUploadedFiles()[0])) {

			$photo->moveTo(BASE_PATH . '/public/img/' . $photo->getName());
		}

		$product->photo_url = $photo->getName();
		$success = $product->save();

		if ($success) {

			$message = "A new item was added!";
		} else {

			$message = "Sorry, the following problems were generated:<br>" . implode('<br>', $product->getMessages());
		}

		$this->view->success = $success;
		$this->view->message = $message;
	}


	public function detailsAction()
	{

		$this->view->product = Products::findFirst($this->dispatcher->getParam("id"));
	}
}
