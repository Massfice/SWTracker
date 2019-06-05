<?php

namespace app\libs\proccesses;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;

use app\libs\core\ExtendedConfig;
use app\libs\core\VarySender;
use app\libs\containers\Container;

class LoginProccess extends Proccess {
	
	protected function validate() {
		
		if(!$this->areParamsSet('login','passwd')) return FALSE;
		
		$login = $this->params['login'];
		$passwd = $this->params['passwd'];
			
		if(!App::getMessages()->isError()) {
				
			$i = App::getDB()->count('users',[
				'login' => $login,
				'passwd' => $passwd
			]);
				
			if($i == 0) Utils::addErrorMessage('Niewłaściwe dane logowania.');
		}
		
		return !App::getMessages()->isError();
	}
	
	protected function proccess() {
		RoleUtils::addRole('user');
		
		$user = App::getDB()->select(
			'users',
			[
				'user_id(id)[Int]',
				'login(name)'
			],
			[
				'login' => $this->params['login'],
				'passwd' => $this->params['passwd']
			]
		);
		
		$user = $user[0];
		
		SessionUtils::storeObject('user',$user);
		
		VarySender::getInstance()->addVar('successfull',TRUE);
		VarySender::getInstance()->addVar('user_id',$user['id']);
		VarySender::getInstance()->addVar('user_name',$user['name']);
		
		Container::$enable_mini = FALSE;
		
		App::getRouter()->forwardTo('home');
	}
	
}

?>