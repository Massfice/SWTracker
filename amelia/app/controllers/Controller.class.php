<?php

	namespace app\controllers;

	abstract class Controller {
		
		protected $container;
		
		public function __construct() {
			
			$rc = new \ReflectionClass($this);
			
			$class_name = $rc->getName();
			
			$class_name = str_replace('Controller','',$class_name);
			
			$class_name = str_replace('app\\controllers\\','',$class_name);
			
			$class_name = '\\app\\libs\\containers\\'.$class_name.'Container';
			
			$this->container = new $class_name();
			
		}
		
	}

?>