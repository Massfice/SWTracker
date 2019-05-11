<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class AuthorController extends SettlementController {
	
	public function action_authors() {
		$this->container->generateView();
	}
	
}