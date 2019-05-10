<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;

use app\libs\proccesses\RegisterProccess;

abstract class AccessController extends Controller {
	
	public function __construct() {
		if(RoleUtils::inRole('user')) App::getRouter()->redirectTo('home');
		parent::__construct();
	}
	
}

?>