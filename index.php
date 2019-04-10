<?php
	
	require_once '_private_/libs/Interfaces/DataBaseConnection.interface.php';
	require_once '_private_/libs/Interfaces/Validation.interface.php';
	
	require_once '_private_/libs/Modify/Tracker.class.php';
	require_once '_private_/libs/Security/Checker.class.php';
	require_once '_private_/libs/Security/Login.class.php';
	
	$checker = new Checker();
	
	$checker->check();
	
	function track(&$showInfo,&$showError) {
		if(isset($_POST['from']) && isset($_POST['to']) && isset($_POST['nicks'])) {
		
			$from = $_POST['from'];
			$to = $_POST['to'];
			$nicks = $_POST['nicks'];
		
			$url = $from;
		
			$tracker = new Tracker($url);
		
			$tracker->extractAll($from,$to,$nicks);
			$tracker->getInfo($showInfo,$showError);
		
		}	
	}
	
	function logout() {
		session_destroy();
		header('Location: http://localhost/myProjects/SWTracker/');
	}
	
	$showInfo = array();
	$showError = array();
	
	if(isset($_REQUEST['action'])) {
		
		switch($_REQUEST['action']) {
			
			case 'track': track($showInfo,$showError); break;
			case 'logout': logout(); break;
			
		}
		
	}
	
	include '_private_/view.php';
	
?>