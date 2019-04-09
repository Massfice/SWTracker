<?php
	
	require_once '_private_/libs/Modify/Tracker.class.php';
	require_once '_private_/libs/Security/Checker.class.php';
	
	$checker = new Checker();
	
	$checker->execute();
	
	$from = isset($_POST['from']) ? $_POST['from'] : '';
	
	$to = isset($_POST['to']) ? $_POST['to'] : '';
	
	$nicks = isset($_POST['nicks']) ? $_POST['nicks'] : '';
	
	$showInfo = array();
	
	if($from != '' && $to != '' && $nicks != '') {
		
		$url = $from;
		
		$tracker = new Tracker($url);
		
		$tracker->extractAll($from,$to,$nicks);
		$tracker->getInfo($showInfo);
		
	}
	
	include '_private_/view.php';
	
?>