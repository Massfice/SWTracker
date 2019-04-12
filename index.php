<?php
	
	require_once dirname(__FILE__).'/_private_/config.php';
	
	require_once ROOT.'/libs/Interfaces/DataBaseConnection.interface.php';
	require_once ROOT.'/libs/Interfaces/Information.interface.php';
	require_once ROOT.'/libs/Interfaces/Validation.interface.php';
	require_once ROOT.'/libs/Interfaces/Actioner.interface.php';
	
	require_once ROOT.'/libs/Usage/Tracker.class.php';
	require_once ROOT.'/libs/Security/Checker.class.php';
	require_once ROOT.'/libs/Security/Login.class.php';
	require_once ROOT.'/libs/Modify/Register.class.php';
	require_once ROOT.'/libs/Smarty/libs/Smarty.class.php';
	require_once ROOT.'/libs/Usage/FrontController.class.php';
	require_once ROOT.'/libs/Modify/SettlementManager.class.php';
	
	$fcont = new FrontController();
	
	$fcont->execute();
	$fcont->action();
	
?>