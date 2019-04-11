<?php
	
	require_once '_private_/libs/Interfaces/DataBaseConnection.interface.php';
	require_once '_private_/libs/Interfaces/Validation.interface.php';
	
	require_once '_private_/libs/Modify/Tracker.class.php';
	require_once '_private_/libs/Security/Checker.class.php';
	require_once '_private_/libs/Security/Login.class.php';
	require_once '_private_/libs/Modify/Register.class.php';
	require_once '_private_/libs/Smarty/libs/Smarty.class.php';
	require_once '_private_/libs/FrontController.class.php';
	
	$fcont = new FrontController();
	
	$fcont->action();
	
	//$checker = new Checker();
	
	/*//$checker->check();
	
	function track(&$info,&$error) {
		if(isset($_POST['from']) && isset($_POST['to']) && isset($_POST['nicks'])) {
		
			$from = $_POST['from'];
			$to = $_POST['to'];
			$nicks = $_POST['nicks'];
		
			$tracker = new Tracker($from,$to,$nicks);
			
			$tracker->validate();
		
			$tracker->extractAll();
			$tracker->getInfo($info);
			$tracker->getErr($error);
		
		}	
	}
	
	function logout() {
		session_destroy();
		header('Location: http://localhost/myProjects/SWTracker/');
	}
	
	$info = array();
	$error = array();
	
	if(isset($_REQUEST['action'])) {
		
		switch($_REQUEST['action']) {
			
			case 'track': track($info,$error); break;
			case 'logout': logout(); break;
			
		}
		
	}
	
	include '_private_/view.php';*/
	
?>