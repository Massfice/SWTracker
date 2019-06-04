<?php

use core\ParamUtils;
use core\SessionUtils;
use core\RoleUtils;

function vaamelia_init() {
	$user = ParamUtils::getFromCookies('SWHelper');

	if(isset($user) && ParamUtils::getFromCleanURL(0) != 'logout') {
		RoleUtils::addRole('user');
		$user = unserialize($user);
		SessionUtils::storeObject('user',$user);
		$cookie = TRUE;
		if(!isset($_SESSION['SWHelper_cookie'])) SessionUtils::storeObject('SWHelper_cookie',$cookie);
	}
}

?>