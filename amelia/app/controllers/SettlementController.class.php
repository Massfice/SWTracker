<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;

use app\libs\proccesses\IsActiveSettlementProccess;
use app\libs\proccesses\NewSettlementProccess;

use app\libs\containers\NewSettlementRequiredContainer;
use app\libs\containers\SettlementContainer;

class SettlementController extends Controller {
	
	private function settlementPanelView() {
		
		$proccess = new IsActiveSettlementProccess();
		$user = SessionUtils::loadObject('user',TRUE);
		$proccess->putVar('id',$user['id']);
		
		if(!$proccess->make()) $this->container = new NewSettlementRequiredContainer();
		else $this->container = new SettlementContainer();
		
	}
	
	public function __construct() {
		parent::__construct();
		//if(!$this->isActiveSettlement()) $this->container = new NewSettlementRequiredContainer();
		$this->settlementPanelView();
	}
	
	public function action_new_settlement() {
		
		$proccess = new NewSettlementProccess();
		$user = SessionUtils::loadObject('user',TRUE);
		$proccess->putVar('id',$user['id']);
		
		if($proccess->make()) {
			$this->settlementPanelView();
			$this->container->generateView();
		} else App::getRouter()->redirectTo('authors');
	}
	
}