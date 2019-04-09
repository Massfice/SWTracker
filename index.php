<?php
	
	require_once '_private_/libs/Modify/Tracker.class.php';
	require_once '_private_/libs/Security/Checker.class.php';
	
	$checker = new Checker();
	
	$checker->execute();
	
	function isNickIn($nicksArr,$nick) {
		$b = FALSE;
		
		foreach($nicksArr as $na) {
			if($nick == $na) {
				$b = TRUE;
				break;
			}
		}
		
		return $b;
	}
	
	$from = isset($_POST['from']) ? $_POST['from'] : '';
	
	$to = isset($_POST['to']) ? $_POST['to'] : '';
	
	$nicks = isset($_POST['nicks']) ? $_POST['nicks'] : '';
	
	$showInfo = array();
	
	if($from != '' && $to != '' && $nicks != '') {
		
		$url = $from;
		
		$tracker = new Tracker($url);
		
		$tracker->extractAll();
		$tracker->getInfo($info);
		
		$b = FALSE;
		
		$nicksArr = explode(',',$nicks);
		
		foreach($info as $i) {
			
			if($from == $i['link']) {
				$b = TRUE;
				if(isNickIn($nicksArr,$i['author'])) $showInfo[] = $i;
				$buff = $i['link'];
			}
			
			if($to == $i['link']) {
				if($buff != $i['link'] && isNickIn($nicksArr,$i['author'])) $showInfo[] = $i;
				$b = FALSE;
			}
			
			if($b && $to != $i['link']) {
				if($buff != $i['link'] && isNickIn($nicksArr,$i['author'])) $showInfo[] = $i;
			}
		}
	}
	
	include '_private_/view.php';
	
?>