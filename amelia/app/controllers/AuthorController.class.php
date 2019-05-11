<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class AuthorController extends SettlementController {
	
	public function action_authors() {
		$this->container->generateView();
	}
	
	public function action_new_author() {
		$this->action_authors();
	}
	
	public function action_delate_author() {
		$this->action_authors();
	}
	
	public function action_modify_author() {
		$this->action_authors();
	}
	
}