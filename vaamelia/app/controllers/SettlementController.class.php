<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;

use app\controllers\core\PostInitController;

use app\libs\proccesses\IsActiveSettlementProccess;
use app\libs\proccesses\NewSettlementProccess;

use app\libs\containers\NewSettlementRequiredContainer;
use app\libs\containers\SettlementContainer;

class SettlementController extends PostInitController {
	
	protected function post_init() {
		$proccess = new IsActiveSettlementProccess();
		$user = SessionUtils::loadObject('user',TRUE);
		$proccess->param('id',$user['id'],null)->setRequired(FALSE)->save();
		
		if(!$proccess->make()) $this->container = new NewSettlementRequiredContainer();
	}
	
	public function action_new_settlement() {
		
		$proccess = new NewSettlementProccess();
		$user = SessionUtils::loadObject('user',TRUE);
		$proccess->param('id',$user['id'],null)->setRequired(FALSE)->save();
		
		if($proccess->make(TRUE)) {
			$this->container = new SettlementContainer();
			$this->container->generateView();
		} else App::getRouter()->forwardTo('authors');
	}
	
}