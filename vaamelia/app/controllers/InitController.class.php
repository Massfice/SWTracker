<?php

	namespace app\controllers;

	abstract class InitController {
		
		protected $container;
		
		protected function createContainer() {
			
			$rc = new \ReflectionClass($this);
			
			$class_name = $rc->getName();
			
			$class_name = str_replace('Controller','',$class_name);
			
			$class_name = str_replace('app\\controllers\\','',$class_name);
			
			$class_name = '\\app\\libs\\containers\\'.$class_name.'Container';
			
			$this->container = new $class_name();
		}
		
		abstract protected function pre_init();
		abstract protected function post_init();
		
		public function __construct() {
			$this->pre_init();
			$this->createContainer();
			$this->post_init();
		}
		
	}

?>