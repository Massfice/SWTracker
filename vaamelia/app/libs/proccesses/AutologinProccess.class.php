<?php

namespace app\libs\proccesses;

use core\SessionUtils;
use core\App;

class AutologinProccess extends NonValidationProccess {
	
	protected function proccess() {
		
		$user = SessionUtils::loadObject('user',TRUE);
		setcookie('SWHelper',serialize($user),$this->params['lifetime'],'/');
		
		$cookie = $this->params['lifetime'] > \time() ? TRUE : FALSE;
		
		$_SESSION['SWHelper_cookie'] = $cookie;
		
	}
	
}

?>