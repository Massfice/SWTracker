<?php

namespace app\libs\proccesses;

use core\App;
use core\Utils;

use app\libs\usage\JavaScriptFuncsCaller;
use app\libs\usage\ExtendedConfig;

class RegisterProccess extends Proccess {
	
	protected function validate() {
		
		if(!$this->areParamsSet('login','passwd','repasswd')) return FALSE;
		
		$login = $this->params['login'];
		$passwd = $this->params['passwd'];
		$repasswd = $this->params['repasswd'];
			
		if($login == '') Utils::addErrorMessage('Musisz podać login.');
		if($passwd == '') Utils::addErrorMessage('Musisz podać hasło.');
		if($repasswd == '') Utils::addErrorMessage('Musisz powtórzyć hasło.');
			
		if(!App::getMessages()->isError()) {
			
			$i = App::getDB()->count('users',[
				'login' => $login
			]);
			
			if($i > 0) Utils::addErrorMessage('Podany użytkownik już istnieje.');
			else {
				if($passwd != $repasswd) Utils::addErrorMessage('Podane hasła się nie zgadzają.');
			}
			
		}

		return !App::getMessages()->isError();	
	}
	
	protected function proccess() {
		App::getDB()->insert('users',[
			'user_id' => NULL,
			'login' => $this->params['login'],
			'passwd' =>$this->params['passwd']
		]);
		
		$func_text = 'alert(
			"Rejestracja zakończona sukcesem. Zostaniesz automatycznie zalogowany/a."
		);';
		
		JavaScriptFuncsCaller::getInstance()->addFunc($func_text);
		
		$proccess = new LoginProccess();
		
		$proccess->putVar('login',$this->params['login']);
		$proccess->putVar('passwd',$this->params['passwd']);
		
		$proccess->make();
		
	}
	
}

?>