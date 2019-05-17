<?php

namespace app\controllers;

use core\ParamUtils;
use core\App;
use core\Validator;

use app\libs\proccesses\LoginProccess;

class LoginController extends AccessController {
	
	public function action_login_show() {
		$this->container->generateView();
	}
	
	public function action_login() {
		
		
		$proccess = new LoginProccess();
		
		$v = new Validator;
		
		$proccess->param('login','post')->setRequiredMessage('Musisz podać login.')->save();
		$proccess->param('passwd','post')->setRequiredMessage('Musisz podać hasło.')->save();
		
		$proccess->make();
		
		$this->container->generateView();
	}

}

?>