<?php

	namespace app\libs\containers;

	use core\App;
	use core\ParamUtils;
	use core\SessionUtils;
	
	use app\libs\containers\core\GeneralContainer;
	
	/*use app\libs\core\ElementTemplater\ItemListTemplate;
	use app\libs\core\ElementTemplater\ArrayMaker;
	use app\libs\core\ElementTemplater\ElementTemplater;*/

	abstract class Container extends GeneralContainer {
		
		protected function init() {
			
			App::getSmarty()->assign('user',SessionUtils::loadObject('user',TRUE));
				
			$cookie = isset($_SESSION['SWHelper_cookie']) ? $_SESSION['SWHelper_cookie'] : FALSE;
			App::getSmarty()->assign('autologin',$cookie);
			
		}
		
	}

?>