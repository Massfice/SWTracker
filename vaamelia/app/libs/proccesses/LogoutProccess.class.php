<?php

namespace app\libs\proccesses;

use core\RoleUtils;
use core\App;
use core\SessionUtils;

class LogoutProccess extends NonValidationProccess {
	
	protected function proccess() {
		
		$lifetime = time() - (86400 * 30);
		
		$proccess = new AutologinProccess();
		$proccess->param('lifetime',$lifetime,null)->setRequired(FALSE)->save();
		$proccess->make();
		
		RoleUtils::removeRole('user');
		SessionUtils::remove('user');
	}
	
}

?>