<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class PositionController extends SettlementController {
	
	public function action_positions() {
		$this->container->generateView();
	}

}