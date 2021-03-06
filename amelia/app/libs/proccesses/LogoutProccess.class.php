<?php

namespace app\libs\proccesses;

use core\RoleUtils;
use core\App;
use core\SessionUtils;

class LogoutProccess extends NonValidationProccess {
	
	protected function proccess() {
		
		$lifetime = time() - (86400 * 30);
		
		$proccess = new AutologinProccess();
		$proccess->putVar('lifetime',$lifetime);
		$proccess->make();
		
		RoleUtils::removeRole('user');
		SessionUtils::remove('user');
		
		App::getRouter()->redirectTo('login');
	}
	
}

?>