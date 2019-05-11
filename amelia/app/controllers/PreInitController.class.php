<?php

	namespace app\controllers;

	abstract class PreInitController extends InitController {
		
		protected $container;
		
		abstract protected function pre_init();
		protected function post_init() {}
		
	}

?>