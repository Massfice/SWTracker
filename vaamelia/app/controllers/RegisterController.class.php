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

		$proccess = new RegisterProccess();
		
		$proccess->param('login','post')->setRequiredMessage('Musisz podać login.')->save();
		$proccess->param('passwd','post')->setRequiredMessage('Musisz podać hasło.')->save();
		$proccess->param('repasswd','post')->setRequiredMessage('Musisz powtórzyć hasło.')->save();
		
		$proccess->make();
		
		$this->container->generateView();
	}
	
}

?>