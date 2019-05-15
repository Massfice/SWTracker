<?php

namespace app\controllers;

use core\ParamUtils;
use core\App;

use app\libs\proccesses\LoginProccess;

class LoginController extends AccessController {
	
	public function action_login() {
		
		$login = ParamUtils::getFromPOST('login');
		$passwd = ParamUtils::getFromPOST('passwd');
		
		$proccess = new LoginProccess();
		
		$proccess->putVar('login',$login);
		$proccess->putVar('passwd',$passwd);
		
		$proccess->make();
		
		$this->container->generateView();
	}

}

?>