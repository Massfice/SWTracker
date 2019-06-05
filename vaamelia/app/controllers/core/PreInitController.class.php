<?php

	namespace app\controllers\core;

	abstract class PreInitController extends InitController {
		
		protected $container;
		
		abstract protected function pre_init();
		protected function post_init() {}
		
	}

?>