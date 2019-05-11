<?php

	namespace app\controllers;

	abstract class PostInitController extends InitController {
		
		protected $container;
		
		protected function pre_init() {}
		abstract protected function post_init();
		
	}

?>