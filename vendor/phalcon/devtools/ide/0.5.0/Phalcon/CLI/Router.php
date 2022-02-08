<?php 

namespace Phalcon\CLI {

	/**
	 * Phalcon\CLI\Router
	 *
	 * <p>Phalcon\CLI\Router is the standard framework router. Routing is the
	 * process of taking a command-line arguments and
	 * decomposing it into parameters to determine which module, task, and
	 * action of that task should receive the request</p>
	 *
	 *<code>
	 *	$router = new Phalcon\CLI\Router();
	 *	$router->handle(array());
	 *	echo $router->getTaskName();
	 *</code>
	 *
	 */
	
	class Router {

		protected $_dependencyInjector;

		protected $_module;

		protected $_task;

		protected $_action;

		protected $_params;

		protected $_defaultModule;

		protected $_defaultTask;

		protected $_defaultAction;

		protected $_defaultParams;

		public function __construct(){ }


		/**
		 * Sets the dependency injector
		 *
		 * @param \Phalcon\DI $dependencyInjector
		 */
		public function setDI($dependencyInjector){ }


		/**
		 * Returns the internal dependency injector
		 *
		 * @return \Phalcon\DI
		 */
		public function getDI(){ }


		/**
		 * Sets the name of the default module
		 *
		 * @param string $moduleName
		 */
		public function setDefaultModule($moduleName){ }


		/**
		 * Sets the default controller name
		 *
		 * @param string $controllerName
		 */
		public function setDefaultTask($taskName){ }


		/**
		 * Sets the default action name
		 *
		 * @param string $actionName
		 */
		public function setDefaultAction($actionName){ }


		/**
		 * Handles routing information received from command-line arguments
		 *
		 * @param array $arguments
		 */
		public function handle($arguments){ }


		/**
		 * Returns proccesed module name
		 *
		 * @return string
		 */
		public function getModuleName(){ }


		/**
		 * Returns proccesed task name
		 *
		 * @return string
		 */
		public function getTaskName(){ }


		/**
		 * Returns proccesed action name
		 *
		 * @return string
		 */
		public function getActionName(){ }


		/**
		 * Returns proccesed extra params
		 *
		 * @return array
		 */
		public function getParams(){ }

	}
}
