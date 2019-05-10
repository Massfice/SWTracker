<?php

namespace app\libs\proccesses;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;

use app\libs\usage\JavaScriptFuncsCaller;
use app\libs\usage\ExtendedConfig;

class LoginProccess extends Proccess {
	
	protected function validate() {
		
		if(!$this->areParamsSet('login','passwd')) return FALSE;
		
		$login = $this->params['login'];
		$passwd = $this->params['passwd'];
			
		if($login == '') Utils::addErrorMessage('Musisz podać login.');
		if($passwd == '') Utils::addErrorMessage('Musisz podać hasło.');
			
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
		
		$func_text = 'redirectMessage(
			"Logowanie zakończone sukcesem. Zostaniesz przekierowany/a do panelu użytkownika.",
			"'.ExtendedConfig::getInstance()->getExtended()['full_url'].'home"
		);';
		
		JavaScriptFuncsCaller::getInstance()->addFunc($func_text);
	}
	
}

?>