<?php

class Products extends \Phalcon\Mvc\Model
{

	/**
	 *
	 * @var integer
	 */
	public $id;

	/**
	 *
	 * @var string
	 */
	public $name;

	/**
	 *
	 * @var string
	 */
	public $description;

	/**
	 *
	 * @var double
	 */
	public $price;

	/**
	 *
	 * @var integer
	 */
	public $inventory;

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->setSchema("phalcon_demo");
		$this->setSource("products");
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return Products[]|Products|\Phalcon\Mvc\Model\ResultSetInterface
	 */
	public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return Products|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
	 */
	public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
	{
		return parent::findFirst($parameters);
	}
}
