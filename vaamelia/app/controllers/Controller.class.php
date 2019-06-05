<?php

	namespace app\controllers;
	
	use app\controllers\core\InitController;
	
	abstract class Controller extends InitController {
		
		protected $container;
		
		protected function pre_init() {
			
			//do something if you want
			
			
		}
		protected function post_init() {
			
			//do something if you want
			
		}
		
	}

?>