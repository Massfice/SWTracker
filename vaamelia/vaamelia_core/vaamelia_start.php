<?php

use core\App;
use core\SessionUtils;
use core\ParamUtils;
use app\libs\usage\ExtendedConfig;

function vaamelia_start() {
	$full_url = ExtendedConfig::getInstance()->getExtended()['full_url'];
	App::getSmarty()->assign('full_url',$full_url);
	
	
	$ajax = ParamUtils::getFromGet('ajax');
	if(!(isset($ajax) && !(bool)$ajax)) {
	
		SessionUtils::store('prev','app\\libs\\containers\\ThreeTemplateContainer');
	
		$action = ParamUtils::getFromCleanURL(0);
	
		//Ładowanie widkou
	
		App::getSmarty()->assign('sid', session_id());
	
		App::getSmarty()->assign('action',$action);
	
		App::getSmarty()->display('index.tpl');
		exit();
	}
}

?>