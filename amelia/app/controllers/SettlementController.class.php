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
		else parent::__construct();
		
	}
	
	public function __construct() {
		$this->settlementPanelView();
	}
	
	public function action_new_settlement() {
		
		$proccess = new NewSettlementProccess();
		$user = SessionUtils::loadObject('user',TRUE);
		$proccess->putVar('id',$user['id']);
		
		if($proccess->make(TRUE)) {
			$this->settlementPanelView();
			$this->container->generateView();
		} else App::getRouter()->redirectTo('authors');
	}
	
}