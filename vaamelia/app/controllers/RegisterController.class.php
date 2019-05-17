<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;

use app\libs\proccesses\RegisterProccess;

class RegisterController extends AccessController {
	
	public function action_register_show() {
		$this->container->generateView();
	}
	
	public function action_register() {
		
		$login = ParamUtils::getFromPOST('login');
		$passwd = ParamUtils::getFromPOST('passwd');
		$repasswd = ParamUtils::getFromPOST('repasswd');

		$proccess = new RegisterProccess();
		
		$proccess->putVar('login',$login);
		$proccess->putVar('passwd',$passwd);
		$proccess->putVar('repasswd',$repasswd);
		
		$proccess->make();
		
		$this->container->generateView();
	}
	
}

?>