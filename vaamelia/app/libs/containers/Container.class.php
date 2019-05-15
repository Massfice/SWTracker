<?php

	namespace app\libs\containers;
	
	use core\App;
	use core\ParamUtils;
	use core\SessionUtils;
	
	use app\libs\usage\VarySender;

	abstract class Container {
		
		public function generateView() {
			
			$rc = new \ReflectionClass($this);
			
				$extend_string = 'extends:';
			
				$names = array();
			
				while ($rc = $rc->getParentClass()) {
				
					$class_name = $rc->getName();
					$class_name = str_replace('app\\libs\\containers\\','',$class_name);
					if($class_name == 'Container') break;
				
					$names[] = $class_name;
				}
			
				for($i = 0; $i < count($names); $i++) {
				
					$paths[$i] = $names[count($names) - $i - 1];
					$extend_string = $extend_string.$i.'.tpl|';
				}
			
				$extend_string = $extend_string.$i.'.tpl';
			
				if($extend_string == 'extend:0.tpl') $extend_string = '0.tpl';
			
				$rc = new \ReflectionClass($this);
				
				$name = $rc->getName();
				
				$name = str_replace('app\\libs\\containers\\','',$name);
				
				$paths[] = $name;
				
				//Smarty:
				
				App::getSmarty()->assign('user',SessionUtils::loadObject('user',TRUE));
				
				$cookie = isset($_SESSION['SWHelper_cookie']) ? $_SESSION['SWHelper_cookie'] : FALSE;
				
				App::getSmarty()->assign('autologin',$cookie);
				
				if(isset($_GET['mini']) && $_GET['mini'] != 'body') {
					$extend_string = 'mini_container.tpl';
					$paths = $_GET['mini'];
				}
				
				VarySender::getInstance()->addVar('testing','test');
				VarySender::getInstance()->send();
				
				App::getSmarty()->assign('paths',$paths);
			
				App::getSmarty()->display($extend_string);
		}
	}

?>