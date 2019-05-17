<?php

namespace app\libs\proccesses;

use core\App;
use core\Utils;

use app\libs\usage\ExtendedConfig;
use app\libs\usage\VarySender;

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
			'passwd' => $this->params['passwd']
		]);
		
		
		VarySender::getInstance()->addVar('register_successfull',TRUE);
		
		$proccess = new LoginProccess();
		
		$proccess->param('login',$this->params['login'],null)->save();
		$proccess->param('passwd',$this->params['passwd'],null)->save();
		
		$proccess->make();
		
	}
	
}

?>